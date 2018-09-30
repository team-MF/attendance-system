<template>
  <div>
    <div class="container has-text-centered">
      <h2 class="subtitle pb10">
        2018/01/01(月)
      </h2>
      <h1 class="title"><span class="fz3em">00:00:00</span></h1>
    </div>
    <div class="section">
      <div class="columns">
        <div class="column is-2 is-offset-3">
          <a class="button is-large is-fullwidth is-success" @click="attendance">出勤</a>
        </div>
        <div class="column is-2">
          <a class="button is-large is-fullwidth is-danger" @click="leavingWork">退勤</a>
        </div>
        <div class="column is-2">
          <a class="button is-large is-fullwidth" @click="vacation">休暇</a>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .fz3em {
    font-size: 3em;
  }
</style>

<script>
  export default {
    data() {
      return {
        
      }
    },
    props: {
      dateTime: '',
    },
    methods: {
      async attendance() {
        // 出勤ボタン押下処理
        this.$emit('attendance', this.dateTime)
      },
      async leavingWork() {
        // 退勤ボタン押下処理
        this.$emit('leavingWork', this.dateTime)
      },
      async vacation() {
        // 休暇ボタン押下処理
        this.$emit('vacation')
      },
    }
  }
</script>
