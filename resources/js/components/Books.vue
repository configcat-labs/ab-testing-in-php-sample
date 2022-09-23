<script>
import BookIcon from "./icons/BookIcon.vue";
export default {
  props: {
    books: Array,
  },
  components: { BookIcon },
};
</script>
<template>
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-md mb-8 lg:mb-16">
        <h2
          class="
            mb-4
            text-4xl
            tracking-tight
            font-extrabold
            text-gray-900
            dark:text-white
          "
        >
          Browse our list of books
        </h2>
        <p class="text-gray-500 sm:text-xl dark:text-gray-400">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint
          veritatis ut, debitis id tempore doloribus alias eum voluptas
          blanditiis necessitatibus!
        </p>
      </div>
      <div
        class="
          space-y-8
          md:grid md:grid-cols-2
          lg:grid-cols-3
          md:gap-12 md:space-y-0
        "
      >
        <div v-for="book in books" :key="book.id" class="card border rounded-lg p-2 shadow-md">
          <div
            class="
              flex
              justify-center
              items-center
              mb-2
              w-10
              h-10
              rounded-full
              bg-primary-100
              lg:h-12 lg:w-12
            "
          >
            <BookIcon />
          </div>
          <h3 class="mb-2 text-xl font-bold dark:text-white">{{ book.title }}</h3>
          <p class="text-gray-500 dark:text-gray-400">{{ book.author }}</p>
        </div>

      </div>
    </div>
  </section>
</template>