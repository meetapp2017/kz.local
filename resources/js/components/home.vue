<template>
  <div>
    <div class="alert alert-info" role="alert">
      <h1>{{ title }}</h1>
    </div>

    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">username</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, id) in items" :key="id">
          <td>{{ item.id }}</td>
          <td>{{ item.username }}</td>
          <td>{{ item.email }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "home",
  data() {
    return {
      title: "Users",
      items: [],
    };
  },
  created() {
    // or mounted
    this.init();
  },

  methods: {
    init() {
      axios
        .get("/api/users")
        .then((response) => {
          this.items = response.data;
        })
        .catch(function (error) {
          console.log(JSON.stringify(error));
        });
    },
  },
};
</script>
