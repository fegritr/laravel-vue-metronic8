<template>
  <div class="modal fade" tabindex="-1" id="kt_modal_edit_book">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Books</h5>

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
          <label class="form-label">Judul Buku</label>
          <input type="text" class="form-control" v-model="book.name" placeholder="" />
          <br />
          <label class="form-label">Kategori</label>
          <select class="form-select" aria-label="Select example">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br />
          <label class="form-label">Penulis</label>
          <input type="text" class="form-control" v-model="book.author" placeholder="" />
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
            @click="addBook"
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
      book: {
        name: "",
        author: "",
      },
    };
  },
  methods: {
    addBook() {
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        this.$axios
          .post("/api/books/add", this.book)
          .then((response) => {
            this.$router.push({ name: "books" });
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
