<script>
import RightChevron from "./icons/RightChevron.vue";
import CameraIcon from "./icons/CameraIcon.vue";

export default {
  components: {
    RightChevron,
    CameraIcon,
  },
};
</script>

<template>
  <section class="banner">
    <div
      class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12"
    >
      <h1
        class="
          mb-4
          text-4xl
          font-extrabold
          tracking-tight
          leading-none
          text-white
          md:text-5xl
          lg:text-6xl
        "
      >
        We invest in the world’s potential
      </h1>
      <p
        class="
          mb-8
          text-lg
          font-normal
          text-gray-100
          lg:text-xl
          sm:px-16
          xl:px-48
        "
      >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores illo
        quam quod pariatur amet cumque corrupti eaque nobis sequi delectus,
        doloribus reiciendis est quia consectetur commodi assumenda obcaecati
        ratione molestias!
      </p>
      <div
        class="
          flex flex-col
          mb-8
          lg:mb-16
          space-y-4
          sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4
        "
      >
        <a
          href="#"
          class="
            bg-blue-600
            inline-flex
            justify-center
            items-center
            py-3
            px-5
            text-base
            font-medium
            text-center text-white
            rounded-lg
            bg-primary-700
            hover:bg-primary-800
            focus:ring-4 focus:ring-primary-300
          "
        >
          Start Reading
          <RightChevron />
        </a>
        <a
          href="#"
          class="
            inline-flex
            justify-center
            items-center
            py-3
            px-5
            text-base
            font-medium
            text-center text-gray-900
            rounded-lg
            border border-gray-300
            bg-gray-100
          "
        >
          <CameraIcon />
          Watch video
        </a>
      </div>
    </div>
  </section>
</template>

<style scoped>
.banner {
  background-color: #21d4fd;
  background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%);
}
</style>