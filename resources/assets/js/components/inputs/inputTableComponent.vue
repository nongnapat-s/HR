<template>
<table class="table table-bordered table-hover">
  <thead>
    <tr style="background: azure;">
        <th v-for = "head in headRows"
            :key = "head"
            scope = "col"
        >{{ head }}</th>    
        <th v-if = "hasActions !== undefined"> จัดการข้อมูล </th>
    </tr>
  </thead>
  <tbody>
    <tr v-for = "(row,index) in rows"
            :key = "index"
            scope = "col">
        <td v-for = "(field,fieldIndex) in row " :key = "fieldIndex">{{ field }}</td>   
        <td v-if = "hasActions !== undefined">
           <a v-for ="action in hasActions"
                :key = "action"
                role = "button"
                :class = "actions[action].class"
                v-html= "actions[action].icon"
           ></a>
        </td>
    </tr>
  </tbody>
</table>
</template>]
<script>
export default {
    props : {
        headRows : 
            {
                required : true,
                type : Array
            },
        rows : 
            { 
                required : true,
                type : Array
            },
        hasActions : 
            {
                required: false
            }
    },
    data() {
        return {
            actions : {
                edit : {
                    class : "btn btn-sm btn-info",
                    icon : '<i class = "fa fa-pencil"></i>'
                },
                delete : {
                    class : "btn btn-sm btn-danger",
                    icon : '<i class = "fa fa-trash"></i>'
                }
            }
        }
    }
}
// 1. ลบและแก้ไข emit ชื่อ event
// 2. ซ่อน รหัส
</script>

