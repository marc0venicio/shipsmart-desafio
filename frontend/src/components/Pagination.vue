<template>
    <div class="pagination">
    <button
      v-if="showPrevious"
      class="item prev"
      @click="changePage(current - 2)"
    >
      &laquo;
    </button>
    <span
      v-for="(page, index) in pages"
      :key="page"
      class="item"
      :class="{ current: page === current }"
      @click="changePage(page)"
    >
      {{ page }}
</span>
    <button v-if="showNext" class="item next" @click="changePage(current + 1)">
      &raquo;
    </button>
  </div>
  </template>
  
  <script>
  export default {
    name: 'Pagination',
  props: {
    offset: {
      type: [String, Number],
      default: 1,
    },
    total: {
      type: [String, Number],
      required: true,
    },
    limit: {
      type: [String, Number],
      default: 5,
    },
  },
  computed: {
    showPrevious() {
      return this.current > 1;
    },
    showNext() {
      return this.total > this.limit * this.current;
    },
    current() {
      return this.offset && this.offset !== 1 ? this.offset + 1: 1;
    },
    pages() {
      const qty = Math.ceil(this.total / this.limit);
      if (qty <= 1) return [1];
      console.log(Array.from(Array(qty).keys(), (i) => i + 1))
      return Array.from(Array(qty).keys(), (i) => i + 1);
    },
  },
  methods: {
    changePage(offset) {
      this.$emit('change-page', offset);
    },
  },
};
  </script>
  
  <style lang="scss" scoped>
  .pagination {
    display: flex;
    justify-content: center;
    margin: 30px;
    .item {
      padding: 0.5rem 0.75rem;
      border: 1px solid var(--light);
      cursor: pointer;
      &:first-child {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
      }
      &:last-child {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
      }
      &:hover {
        border-color: lighten(#333333, 50%);
        z-index: 3;
      }
      &.current {
        cursor: default;
        color: white;
        background-color: var(--primary);
        border-color: var(--primary);
        z-index: 2;
      }
      + .item {
        margin-left: -1px;
        margin-right: 0;
      }
    }
  }
  </style>