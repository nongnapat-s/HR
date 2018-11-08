<template>
    <table class="table table-bordered" id = "childs">
        <thead>
            <tr>
                <th 
                    v-for="(headerOption, index) in headerOptions" :key="index" 
                    style="max-width: 30px;" 
                >
                    <center>
                        {{ headerOption.label }}
                    </center>
                </th>
            </tr>
        </thead>
        <tbody>
                <tr v-for="(tbodyOption, index) in tbodyOptions" :key="index">
                    <td style="max-width: 30px;word-wrap:break-word;">{{ tbodyOption }}</td>
                </tr>
        </tbody>
    </table>
</template>]
<script>
export default {
    props : {
        name : { default : ''},
        headerOptions : { default : ''},
        tbodyOptions : { default : ''},
    }

}
</script>

