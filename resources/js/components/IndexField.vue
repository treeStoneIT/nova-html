<template>
    <div v-html="field.value"></div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
