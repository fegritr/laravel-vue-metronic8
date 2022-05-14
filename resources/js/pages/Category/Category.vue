<template>
  <div class="content d-flex flex-column flex-column-fluid card p-5" id="kt_content">
    <div class="m-5">
      <button
        type="button"
        class="btn btn-primary float-end"
        data-bs-toggle="modal"
        data-bs-target="#kt_modal_add_book"
      >
        Add Category
      </button>
    </div>

    <div>
      <DxDataGrid
        id="gridContainerBooks"
        ref="dataGrid"
        key-expr="id"
        :data-source="dataTable"
        :remote-operations="true"
        :allow-column-reordering="true"
        :row-alternation-enabled="true"
        :show-borders="false"
      >
        <DxColumn caption="Category" data-field="category_name" data-type="string" />
        <DxColumn caption="Action" type="buttons" :width="110">
          <DxButton hint="Edit" icon="edit" @click="editData" />
          <DxButton hint="Delete" icon="trash" @click="deleteData" />
        </DxColumn>

        <DxPaging :page-size="10" />
        <DxPager :show-page-size-selector="true" :allowed-page-sizes="[10, 15, 20]" />
      </DxDataGrid>
    </div>
  </div>

  <AddCategorys @refreshGridParent="refreshGrid"></AddCategorys>
  <EditCategorys @refreshGridParent="refreshGrid" :data="bookData"></EditCategorys>
</template>
<script>
import {
  DxDataGrid,
  DxColumn,
  DxPaging,
  DxPager,
  DxButton,
} from "devextreme-vue/data-grid";
import CustomStore from "devextreme/data/custom_store";
import AddCategorys from "./components/AddCategory.vue";
import EditCategorys from "./components/EditCategory.vue";

function isNotEmpty(value) {
  return value !== undefined && value !== null && value !== "";
}

const storeCat = new CustomStore({
  key: "id",
  load(loadOptions) {
    const args = { _token: $('meta[name="csrf-token"]').attr("content") };
    [
      "skip",
      "take",
      "requireTotalCount",
      "requireGroupCount",
      "sort",
      "filter",
      "totalSummary",
      "group",
      "groupSummary",
    ];
    args.filter = loadOptions.filter;
    return axios
      .post("/api/category/", args)
      .then((response) => ({
        data: response.data.data,
        totalCount: response.data.totalCount,
        summary: response.data.summary,
        groupCount: response.data.groupCount,
      }))
      .catch(function (error) {
        console.error(error);
      });
  },
});

export default {
  components: {
    DxDataGrid,
    DxColumn,
    DxPaging,
    DxPager,
    DxButton,
    AddCategorys,
    EditCategorys,
  },
  data() {
    return {
      dataTable: storeCat,
      bookData: "",
    };
  },
  created() {
    this.initTable();
  },
  methods: {
    initTable() {
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .get("/api/category")
          .then((response) => {
            this.dataTable = response.data;
          })
          .catch(function (error) {
            console.error(error);
          });
      });
    },
    editData(e) {
      let id = e.row.data.id;
      $("#kt_modal_edit_book").modal("show");
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .get(`/api/category/edit/${id}`)
          .then((response) => {
            this.bookData = response.data;
          })
          .catch(function (error) {
            console.error(error);
          });
      });
    },
    refreshGrid(e) {
      this.$refs.dataGrid.instance.state(null);
      this.initTable();
    },
    deleteData(e) {
      let id = e.row.data.id;
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .delete(`/api/category/delete/${id}`)
          .then((response) => {
            //refresh grid
            this.refreshGrid();
          })
          .catch(function (error) {
            console.error(error);
          });
      });
    },
  },
};
</script>
