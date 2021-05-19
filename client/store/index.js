import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = () =>
  new Vuex.Store({
    state: {
      apiToken: ""
    },
    mutations: {
      setToken(state, token) {
        state.apiToken = token;
      }
    }
  });

export default store;
