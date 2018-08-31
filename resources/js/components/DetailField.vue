<template>
    <panel-item :field="field">
        <template slot="value">
            <div v-if="field.value" v-html="field.value" class="text-90"></div>
            <p v-else>&mdash;</p>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
