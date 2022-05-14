<template>
  <div class="content d-flex flex-column flex-column-fluid card p-5" id="kt_content">
    <div class="m-5">
      <button
        type="button"
        class="btn btn-primary float-end"
        data-bs-toggle="modal"
        data-bs-target="#kt_modal_add_book"
      >
        Add Books
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
        <DxColumn caption="Judul Buku" data-field="name" data-type="string" />
        <DxColumn caption="Nama Penulis" data-field="author" data-type="string" />
        <DxColumn caption="Action" type="buttons" :width="110">
          <DxButton hint="Edit" icon="edit" @click="editData" />
          <DxButton hint="Delete" icon="trash" @click="deleteData" />
        </DxColumn>

        <DxPaging :page-size="10" />
        <DxPager :show-page-size-selector="true" :allowed-page-sizes="[10, 15, 20]" />
      </DxDataGrid>
    </div>
  </div>

  <AddBooks @refreshGridParent="refreshGrid"></AddBooks>
  <EditBooks @refreshGridParent="refreshGrid" :data="bookData"></EditBooks>
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
import AddBooks from "./components/AddBook.vue";
import EditBooks from "./components/EditBook.vue";

function isNotEmpty(value) {
  return value !== undefined && value !== null && value !== "";
}

const store = new CustomStore({
  key: "OrderNumber",
  load(loadOptions) {
    let params = "?";
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
    ].forEach((i) => {
      if (i in loadOptions && isNotEmpty(loadOptions[i])) {
        params += `${i}=${JSON.stringify(loadOptions[i])}&`;
      }
    });
    params = params.slice(0, -1);
    // return fetch(
    //   `https://js.devexpress.com/Demos/WidgetsGalleryDataService/api/orders${params}`
    // )
    //   .then((response) => response.json())
    //   .then((data) => ({
    //     data: data.data,
    //     totalCount: data.totalCount,
    //     summary: data.summary,
    //     groupCount: data.groupCount,
    //   }))
    //   .catch(() => {
    //     throw new Error("Data Loading Error");
    //   });

    return this.$axios.get("/sanctum/csrf-cookie").then((response) => {
      this.$axios
        .get("/api/books")
        .then((response) => {
          this.dataTable = response.data;
        })
        .catch(function (error) {
          console.error(error);
        });
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
    AddBooks,
    EditBooks,
  },
  data() {
    return {
      dataTable: "",
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
          .get("/api/books")
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
          .get(`/api/books/edit/${id}`)
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
          .delete(`/api/books/delete/${id}`)
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
