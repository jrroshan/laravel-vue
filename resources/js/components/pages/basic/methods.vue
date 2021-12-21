<template>
  <div>
    <h1>We can have some data here {{ views }}</h1>
    <button @click="updateCounter(1)">increase</button>
    <button @click="updateCounter(-1)">decrease</button>

    <br />
    <br />
    <div v-for="(blogs, i) in blogs" :key="i">
      <h1>{{ blogs.title }}</h1>
      <p>{{ blogs.post }}</p>
    </div>

    <br />
    <br />
    <br />

    <div>
      <h1 v-if="showItem">show this item if "showItem" is true</h1>
      <h1 v-else>show this item if "showItem" is false</h1>
    </div>

    <button @click="updateShowItem">Click</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      views: 0,
      blogs: [],
      showItem: false,
    };
  },
  methods: {
    updateCounter(num) {
      this.views += num;
    },
    updateShowItem() {
      this.showItem = !this.showItem;
    },
  },
  created() {
    // call the server to get views  of this blog post...
    this.views = 100;
    // get the blog post
    let posts = [
      { title: "this is blog title 1", post: "This is blog post", id: 1 },
      { title: "this is blog title 2", post: "This is blog post", id: 2 },
      { title: "this is blog title 3", post: "This is blog post", id: 3 },
      { title: "this is blog title 4", post: "This is blog post", id: 4 },
      { title: "this is blog title 5", post: "This is blog post", id: 5 },
    ];
    this.blogs = posts;
  },
};
</script>