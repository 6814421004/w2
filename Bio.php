<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio - กฤษดา มหาวงษ์</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-300 min-h-screen font-sans leading-relaxed">

    <div class="max-w-4xl mx-auto px-6 py-12">
        
        <!-- ส่วนหัว (Header) -->
        <header class="border-b border-slate-700 pb-8 mb-10 flex flex-col md:flex-row items-center md:items-start gap-6">
            <!-- รูปโปรไฟล์จำลอง -->
            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-5xl shadow-lg shrink-0">
                👨‍🎓
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 mb-2">
                    กฤษดา มหาวงษ์
                </h1>
                <h2 class="text-xl font-semibold text-slate-400">Software Engineer & Tech Enthusiast</h2>
                <p class="mt-4 text-slate-400 max-w-2xl">
                    "นักพัฒนาซอฟต์แวร์ผู้หลงใหลในการแก้ปัญหาด้วยเทคโนโลยี มีจุดเริ่มต้นจากการชอบประกอบคอมพิวเตอร์ในวัยเด็ก สู่การเขียนโปรแกรมเพื่อสร้างสรรค์นวัตกรรมใหม่ๆ ปัจจุบันมุ่งเน้นที่การพัฒนาระบบเว็บแอปพลิเคชันที่ใช้งานง่าย สวยงาม และมีประสิทธิภาพสูง"
                </p>
            </div>
        </header>

        <!-- ส่วนเนื้อหาหลักแบ่ง 2 ฝั่ง (Grid) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <!-- คอลัมน์ซ้าย: ข้อมูลส่วนตัว -->
            <section class="bg-slate-800/50 p-8 rounded-2xl border border-slate-700/50 hover:border-blue-500/50 transition-colors">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                    <span class="text-blue-400">👤</span> ข้อมูลส่วนตัว
                </h3>
                <ul class="space-y-4">
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-500">ชื่อ-นามสกุล:</span>
                        <span class="text-slate-200 font-medium">นายกฤษดา มหาวงษ์ (กริช)</span>
                    </li>
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-500">วันเกิด:</span>
                        <span class="text-slate-200 font-medium">15 สิงหาคม 2542</span>
                    </li>
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-500">ภูมิลำเนา:</span>
                        <span class="text-slate-200 font-medium">จันทบุรี, ประเทศไทย</span>
                    </li>
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-500">อีเมล:</span>
                        <span class="text-blue-400 font-medium hover:underline cursor-pointer">kritsada.m@example.com</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-slate-500">งานอดิเรก:</span>
                        <span class="text-slate-200 font-medium">ถ่ายภาพ, อ่านหนังสือ Sci-Fi</span>
                    </li>
                </ul>
            </section>

            <!-- คอลัมน์ขวา: ประวัติการศึกษา -->
            <section class="bg-slate-800/50 p-8 rounded-2xl border border-slate-700/50 hover:border-purple-500/50 transition-colors">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                    <span class="text-purple-400">🎓</span> ประวัติการศึกษา
                </h3>
                
                <div class="space-y-6 relative before:absolute before:inset-0 before:ml-2 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-600 before:to-transparent">
                    
                    <!-- ปริญญาโท -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                        <div class="ml-8 md:ml-0 md:w-full md:pl-10">
                            <h4 class="text-lg font-bold text-purple-400">ปริญญาโท (กำลังศึกษา)</h4>
                            <p class="text-white font-medium">วิทยาศาสตรมหาบัณฑิต สาขาวิทยาการข้อมูล (Data Science)</p>
                            <p class="text-sm text-slate-400">จุฬาลงกรณ์มหาวิทยาลัย | พ.ศ. 2567 - ปัจจุบัน</p>
                        </div>
                    </div>

                    <!-- ปริญญาตรี -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group mt-6">
                        <div class="ml-8 md:ml-0 md:w-full md:pr-10 md:text-right">
                            <h4 class="text-lg font-bold text-blue-400">ปริญญาตรี</h4>
                            <p class="text-white font-medium">วิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมคอมพิวเตอร์</p>
                            <p class="text-sm text-slate-400">มหาวิทยาลัยเชียงใหม่ | พ.ศ. 2561 - 2565</p>
                            <span class="inline-block mt-1 px-2 py-1 bg-yellow-500/20 text-yellow-400 text-xs rounded-md border border-yellow-500/30">เกียรตินิยมอันดับ 1</span>
                        </div>
                    </div>

                    <!-- มัธยมศึกษา -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group mt-6">
                        <div class="ml-8 md:ml-0 md:w-full md:pl-10">
                            <h4 class="text-lg font-bold text-emerald-400">มัธยมศึกษา</h4>
                            <p class="text-white font-medium">แผนการเรียน วิทย์-คณิต (คอมพิวเตอร์)</p>
                            <p class="text-sm text-slate-400">โรงเรียนเบญจมราชูทิศ จันทบุรี | พ.ศ. 2555 - 2561</p>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>

</body>
</html>
<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>
