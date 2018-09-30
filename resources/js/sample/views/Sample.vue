<!-- parent となるファイルは js/views 配下に -->
<template>
  <div>
    <!-- ヘッダー -->
    <header-bar></header-bar>

    <div class="content">
      <!-- プルダウン -->
      <dropdown-btn
        :dropdownItems="dropdownItems"
      >
      </dropdown-btn>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        // APIからデータ受け取ったとして
        dropdownItems: [
          'task1',
          'task2',
          'task3',
        ],
      }
    },
  }
</script>