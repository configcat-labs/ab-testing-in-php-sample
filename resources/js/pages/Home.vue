<script>
import Navbar from "../components/shared/Navbar.vue";
import Banner from "../components/Banner.vue";
import Books from "../components/Books.vue";
import NotAvailable from "../components/NotAvailable.vue";

import { useFetch } from "@vueuse/core";

export default {
  data() {
    return {
      books: [],
    };
  },
  components: { Banner, Navbar, Books, NotAvailable },
  async mounted() {
    const { data } = await useFetch("/api/books").json();
    this.books = data;
  },
};
</script>

<template>
  <div>
    <Navbar />
    <Banner />
    <Books v-if="books.length > 0" :books="books" />
    <NotAvailable v-else />
  </div>
</template>