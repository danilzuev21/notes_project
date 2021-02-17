<template>
  <router-view></router-view>
</template>

<script>
export default {
  data() {
    return {
      notes: [],
    };
  },
  mounted() {
    fetch("/customers/list/data")
      .then((res) => res.json())
      .then((notesJson) => {
        console.log(notesJson)
        this.notes = notesJson;
      });
    console.log(this.notes);
  },
};
</script>
