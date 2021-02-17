<template>
  <div>
    <form></form>
    <div class="col-10">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Название</th>
            <th scope="col">Текст</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
            <td colspan="3">Создать заметку</td>
          </tr>
          <router-link
            v-for="note in notes"
            v-bind:key="note.id"
            :to="{ name: 'note', params: { note: note.id } }"
            tag="tr"
          >
            <td>{{ note.name }}</td>
            <td class="hidden-text">{{ note.text }}</td>
            <td>
              <button type="button" class="btn btn-danger">Удалить</button>
            </td>
          </router-link>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      notes: [],
    };
  },
  mounted() {
    axios
      .get("/notes/list/data")
      .then((response) => {
          console.log(response);
          this.notes = response;
      })
      .catch(error => console.log(error));;
    console.log(this.notes);
  },
};
</script>
