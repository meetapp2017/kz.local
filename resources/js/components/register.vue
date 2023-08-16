<template>
  <form>
    <h1>Регистрация</h1>
    <div v-if="err_message" class="alert alert-danger" role="alert">
      <p>Wrong username or password!</p>
    </div>

    <div class="mb-3">
      <label for="exampleInputUserName" class="form-label">User Name</label>
      <input
        type="text"
        class="form-control"
        id="exampleInputUserName"
        aria-describedby="userHelp"
        v-model="input.username"
      />
      <div id="userHelp" class="form-text">Please enter your username!</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword" class="form-label">Password</label>
      <input
        type="password"
        class="form-control"
        id="exampleInputPassword"
        v-model="input.password"
      />
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input
        type="text"
        class="form-control"
        id="exampleInputEmail"
        aria-describedby="userHelp"
        v-model="input.email"
      />
      <div id="userHelp" class="form-text">Please enter your email!</div>
    </div>

    <button type="button" class="btn btn-primary" v-on:click="register()">
      Register
    </button>
  </form>
</template>

<script>
import srv from "../api/service";
export default {
  name: "Register",
  data() {
    return {
      err_message: false,
      input: {
        username: "",
        password: "",
        email: "",
      },
    };
  },
  methods: {
    register() {
      if (this.input.username != "" && this.input.password != "") {

        var data = {
          username: this.input.username,
          password: this.input.password,
          email: this.input.email,
        };

        srv.register(data).then((response) => {

          if (response.data.id > 0) window.location = "/home";
          else this.err_message = true;
        });

      }
    },
  },
};
</script>

