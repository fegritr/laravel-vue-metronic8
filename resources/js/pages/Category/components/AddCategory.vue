<template>
  <div class="modal fade" tabindex="-1" id="kt_modal_add_book">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Category</h5>

          <!--begin::Close-->
          <div
            class="btn btn-icon btn-sm btn-active-light-primary ms-2"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span class="svg-icon svg-icon-2x"></span>
          </div>
          <!--end::Close-->
        </div>

        <div class="modal-body">
          <label class="form-label">Nama Kategori</label>
          <input
            type="text"
            class="form-control"
            v-model="category.name"
            placeholder=""
          />
          <br />
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">
            Close
          </button>
          <button
            type="button"
            class="btn btn-primary"
            data-bs-dismiss="modal"
            @click="AddCategory"
          >
            Save
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      category: {},
    };
  },
  methods: {
    AddCategory() {
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .post("/api/category/add", this.category)
          .then((response) => {
            this.category = {};

            this.$emit("refreshGridParent");
          })
          .catch(function (error) {
            console.error(error);
          });
      });
    },
  },
  beforeRouteEnter(to, from, next) {
    if (!window.Laravel.isLoggedin) {
      window.location.href = "/";
    }
    next();
  },
};
</script>
