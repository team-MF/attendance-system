<template>
  <div>
    <section class="hero is-primary is-bold is-large">
      <div class="hero-head">
        <header-bar></header-bar>
      </div>

      <div class="hero-body">
        <time-stamp
          :dateTime="dateTime"
          @attendance="getAttendanceInfo"
          @leavingWork="getLeavingWorkInfo"
          @vacation="onVacation"
        >
        </time-stamp>
      </div>
    </section>
  </div>
</template>

<style scoped>
  /* override */
  .hero-body {
    padding-top: 11rem!important
  }
</style>

<script>
  export default {
    data() {
      return {
        dateTime: '', //computedの方がいいかも。リアルタイムの取得方法がきまってから検討
      }
    },
    methods: {
      async getAttendanceInfo(val) {

      },
      async getLeavingWorkInfo(val) {

      },
      async onVacation(val) {

      }
    },
    async mounted() {
      // 現在時刻取得処理
      // TODO: 別途考えましょう
      // this.dateTime = 
    },
  }
</script>

