<template>
  <b-dropdown>
    <button class="button is-primary" slot="trigger">
      <span>Click me!</span>
      <b-icon icon="menu-down"></b-icon>
    </button>

    <b-dropdown-item
      v-for="(item, index) in dropdownItems"
      :key="'dropdown-item'+index"
      :value="item"
    >
    {{ item }}
    </b-dropdown-item>
  </b-dropdown>
</template>

<script>
  export default {
    data() {
      return {

      }
    },
    props: {
      dropdownItems: {},
    },
    // データ受け取りめんどいので省略笑
  }
</script>
