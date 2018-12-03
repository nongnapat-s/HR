<template>
<div class="col-md-12">
<div class="container-fuild">
  <div class="row">
        <table class="table table-bordered table-hover table-sm">
 <thead>
            <tr style="background: azure;">
                <th>ประเภทคำสั่ง</th>  
                <th>ข้อมูลคำสั่ง</th>  
                <th>หน่วยงาน</th>
                <th>วันที่ลงนาม</th>
                <th>วันที่มีผลบังคับใช้</th>
                <th>ประเภทการจ้าง</th>
                <th>ตำแหน่ง (สายงาน)</th>
                <th>เลขกรอบตำแหน่ง</th>
                <th>เลขประจำตำแหน่งพนักงาน</th>
                <th>ระดับ/สาย</th>
                <th>ระยะเวลาเริ่มต้น - สิ้นสุด</th>
                <th>หมายเหตุ</th>

            </tr>
        </thead>
        <tbody>
            <tr style="background: yellow;">
                <td> ประเภทคำสั่ง </td>
                <td> เลขที่คำสั่ง / เรื่องของคำสั่ง</td>
                <td> หน่วยงานที่ออกหนังสือ </td>
                <td> วันที่ลงนาม </td>
                <td> วันที่มีผลบังคับใช้ </td>
                <td> ประเภทการจ้างของพนักงาน </td>
                <td> นักวิชาจอมยุทธ (ชำนาญมาก) </td>
                <td> เลขกรอบตำแหน่ง </td>
                <td> เลขประจำตำแหน่งพนักงาน : </td>
                <td> ระดับ/สาย </td>
                <td> ระยะเวลาเริ่มต้น - สิ้นสุด </td>
                <td> หมายเหตุ (ถ้ามี) </td>
            </tr>
            <tr>
                <td> 1. บรรจุและแต่งตั้ง </td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i> (ไม่มีสายงาน)</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td></td>
                <td><i class="fa fa-check"></i></td>
                <td>ถ้ามี </td>
            </tr>

            <tr style="color:red;">
                <td>2. บรรจุและแต่งตั้ง (เป็นอาจารย์)</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td></td>
                <td><i class="fa fa-check"></i></td>
                 <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>3. อนุมัติลูกจ้างชั่วคราว</td>
               <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i> (ไม่มีสายงาน)</td>
                <td><font color = "red"><i class="fa fa-check"></i></font></td>
                <td><font color = "red"><i class="fa fa-check"></i></font></td>
                <td></td>
                <td><i class="fa fa-check"></i></td>
                <td>ถ้ามี</td>
            </tr>

            <tr> 
              <td>4. จ้างต่อ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td><i class="fa fa-check"></i></td>
              <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>5. ต่อเวลาปฏิบัติงาน</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td><i class="fa fa-check"></i></td>
              <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>6. จ้างเป็นที่ปรึกษาคณะฯ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>7. อนุมัติให้ยืมตัว</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>

           <tr> 
              <td>8. โอนย้าย</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>9. เปลี่ยนตำแหน่ง</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>

            <tr> 
              <td>10. แก้ไขคำสั่งให้ข้าราชการลาออกจากราชการ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            <tr> 
              <td>11. แก้ไขคำสั่งบรรจุและแต่งตั้งผู้เปลี่ยนสถานภาพ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            
            <tr> 
              <td>12. ปรับระดับชั้นงาน</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (ไม่มีสายงาน)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <tr style="background: azure;">
                <th>ประเภทคำสั่ง</th>  
                <th>ข้อมูลคำสั่ง</th>  
                <th>หน่วยงาน</th>
                <th>วันที่ลงนาม</th>
                <th>วันที่มีผลบังคับใช้</th>
                <th>ประเภทการจ้าง</th>
                <th>ตำแหน่ง (สายงาน)</th>
                <th>เลขกรอบตำแหน่ง</th>
                <th>เลขประจำตำแหน่งพนักงาน</th>
                <th>ระดับ/สาย</th>
                <th>ระยะเวลาเริ่มต้น - สิ้นสุด</th>
                <th>หมายเหตุ</th>

            </tr>
            <tr> 
              <td>13. เปลี่ยนประเภทการจ้าง</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            
            <tr> 
              <td>14. ให้ใช้ชื่อตำแหน่งพนักงานมหาวิทยาลัยประเภทสนับสนุนความก้าวหน้าของตำแหน่ง</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            
            <tr> 
              <td>15. แต่งตั้งพนักงานมหาวิทยาลัยให้ดำรงตำแหน่งทางวิชาการ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (ไม่มีสายงาน)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            
            <tr> 
              <td>16. แต่งตั้งผู้บริหาร</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td>ถ้ามี</td>
            </tr>
            
            <tr> 
              <td>17. ลาออก</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            <tr> 
              <td>18. ขยายระยะเวลาการจ้างพนักงานมหาวิทยาลัย</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (ไม่มีสายงาน)</td>
              <td></td>
              <td></td>
              <td></td>
              <td><i class="fa fa-check"></i></td>
              <td>ถ้ามี</td>
            </tr>
            
            <tr> 
              <td>19. ให้พนักงานมหาวิทยาลัยกลับเข้าปฏิบัติงานตามปกติ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>ถ้ามี </td>
            </tr>
            
            <tr> 
              <td>20. ลาฝึกอบรม เรียนต่อ</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i> (สายงานถ้ามี)</td>
              <td></td>
              <td></td>
              <td></td>
              <td><i class="fa fa-check"></i></td>
              <td>ถ้ามี</td>
            </tr>
                        </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
        </tbody>
        </table>
  </div>
</div>
</div>
</template>
<style>
    .word-wrap{
        text-align: center;
        max-width: 150px;
        word-wrap:break-word;
    }
    td {
        text-align: center;
        max-width: 150px;
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
