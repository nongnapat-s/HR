<template>
<div class= "container">
  <div class="table-responsive">
 <table class="table table-bordered table-hover" style="width:100%">
        <thead>
            <tr style="background: azure;" class="word-wrap" >
                <th class="word-wrap">ประเภทเอกสาร</th>  
                <th class="word-wrap">เลขคำสั่ง</th>  
                <th class="word-wrap">เรื่องคำสั่ง</th>
                <th class="word-wrap">หน่วยงาน</th>
                <th class="word-wrap">วันที่ลงนาม</th>
                <th class="word-wrap">วันที่มีผลบังคับใช้</th>
                <th style="max-width: 5px;">ประเภทการจ้าง</th>
                <th style="max-width: 5px;">ตำแหน่ง</th>
                <th style="max-width: 5px;">ระดับ/สาย</th>
                <th style="max-width: 5px;">ระยะเวลาการจ้าง - สิ้นสุด</th>
                <th style="max-width: 5px;">หมายเหตุ</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="word-wrap" style="text-align:left"> บรรจุและแต่งตั้ง </td>
                <td class="word-wrap" style="text-align:left"> 1234 </td>
                                <td class="word-wrap" style="text-align:left"> บรรจุและแต่งตั้งพนักงานใหม่ </td>
                <td class="word-wrap" style="text-align:left"> ศิริราชพยาบาล </td>
                                <td class="word-wrap" style="text-align:left"> 10/10/2560 </td>
                <td class="word-wrap" style="text-align:left"> 10/10/2560 </td>
                                <td class="word-wrap" style="text-align:left"> ประเภทการจ้างของพนักงาน </td>
                <td style="text-align:left"> ตำแหน่ง : <br>
                                                               สาย : ถ้ามี<br>
                                                               เลขกรอบ : <br>
                                                               เลขประจำตำแหน่งพนักงาน :<br>
                                                               </td>
                                <td class="word-wrap" style="text-align:left"> บรรจุและแต่งตั้ง </td>
                <td class="word-wrap" style="text-align:left"> บรรจุและแต่งตั้ง </td>
            </tr>

            <tr>
                <td class="word-wrap"> บรรจุและแต่งตั้ง (อาจารย์)</td>
            </tr>

            <tr> 
              <td class="word-wrap"> อนุมัติลูกจ้างชั่วคราว</td>
            </tr>

            <tr> 
              <td class="word-wrap"> จ้างต่อ</td>
            </tr>

            <tr> 
              <td class="word-wrap"> ต่อเวลาปฏิบัติงาน</td>
            </tr>

            <tr> 
              <td class="word-wrap"> จ้างเป็นที่ปรึกษาคณะฯ</td>
            </tr>

            <tr> 
              <td class="word-wrap"> อนุมัติให้ยืมตัว</td>
            </tr>

           <tr> 
              <td class="word-wrap"> โอนย้าย</td>
            </tr>

            <tr> 
              <td class="word-wrap"> เปลี่ยนตำแหน่ง</td>
            </tr>

            <tr> 
              <td class="word-wrap"> แก้ไขคำสั่งให้ข้าราชการลาออกจากราชการ</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> แก้ไขคำสั่งบรรจุและแต่งตั้งผู้เปลี่ยนสถานภาพ</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ปรับระดับชั้นงาน</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> เปลี่ยนประเภทการจ้าง</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ให้ใช้ชื่อตำแหน่งพนักงานมหาวิทยาลัยประเภทสนับสนุนความก้าวหน้าของตำแหน่ง</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> แต่งตั้งพนักงานมหาวิทยาลัยให้ดำรงตำแหน่งทางวิชาการ</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> แต่งตั้งผู้บริหาร</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ลาออก</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ขยายระยะเวลาการจ้างพนักงานมหาวิทยาลัย</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ให้พนักงานมหาวิทยาลัยกลับเข้าปฏิบัติงานตามปกติ</td>
            </tr>
            
            <tr> 
              <td class="word-wrap"> ลาฝึกอบรม เรียนต่อ</td>
            </tr>
        </tbody>
  </table>
  </div>
</div>
  
</template>
<style>
    .word-wrap{
        text-align: center;
        max-width: 50px;
        word-wrap:break-word;
    }
    button {
        box-shadow:0 0 5px #D2D0D0;
    }
</style>

<script>
export default { 
}
</script>
