<template>
    <pre v-bind="$attrs" class="ansicolor"><span v-for="(span, index) in html.spans" :key="index" :style="span.css" v-html="span.text" /> </pre>
</template>

<script setup>
import { computed } from "vue";
import { parse } from "ansicolor";

const props = defineProps({
    value: {
        type: String,
        required: true,
    },
});

const html = computed(() => parse(props.value));
</script>

<style>
.ansicolor {
    @apply overflow-x-auto rounded-lg bg-gray-800 p-3 text-white;
}
</style>
