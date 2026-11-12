<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign - ระบบจัดการงาน</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-200 min-h-screen font-sans">

    <!-- แถบนำทางด้านบน (Navbar) -->
    <nav class="bg-slate-800/80 backdrop-blur-md border-b border-slate-700 p-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="index.php" class="text-slate-400 hover:text-cyan-400 transition-colors flex items-center gap-2">
                <span>◀</span> กลับหน้าหลัก
            </a>
            <h1 class="text-xl font-bold text-white tracking-widest">
                WORK<span class="text-cyan-400">ASSIGN</span>
            </h1>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-sm">
                    👨‍💻
                </div>
                <span class="hidden md:inline font-medium text-slate-300">กฤษดา ม.</span>
            </div>
        </div>
    </nav>

    <!-- พื้นที่เนื้อหาหลัก -->
    <main class="max-w-7xl mx-auto p-6 mt-4">
        
        <header class="mb-8">
            <h2 class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 mb-2">
                Task Board
            </h2>
            <p class="text-slate-400">จัดการและติดตามความคืบหน้าของโปรเจกต์</p>
        </header>

        <!-- Kanban Board (แบ่ง 3 คอลัมน์) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- คอลัมน์: รอดำเนินการ (To Do) -->
            <div class="bg-slate-800/50 rounded-2xl p-4 border border-slate-700 h-fit">
                <div class="flex items-center justify-between mb-4 border-b border-slate-700 pb-2">
                    <h3 class="text-lg font-bold text-amber-400 flex items-center gap-2">
                        <span>📌</span> รอดำเนินการ
                    </h3>
                    <span class="bg-slate-700 text-slate-300 text-xs px-2 py-1 rounded-full">2 งาน</span>
                </div>
                
                <div class="space-y-4">
                    <!-- Task 1 -->
                    <div class="bg-slate-800 p-4 rounded-xl border border-slate-600 hover:border-amber-400 hover:shadow-[0_0_15px_rgba(251,191,36,0.15)] transition-all cursor-pointer group">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-red-500/20 text-red-400 text-xs px-2 py-1 rounded-md font-bold">ด่วนมาก</span>
                            <span class="text-slate-500 text-xs">กำหนด: 8 พ.ย.</span>
                        </div>
                        <h4 class="text-white font-bold mb-1 group-hover:text-amber-400 transition-colors">ออกแบบ Database Schema</h4>
                        <p class="text-sm text-slate-400 mb-4 line-clamp-2">ออกแบบโครงสร้างฐานข้อมูลสำหรับระบบ E-commerce ตัวใหม่ พร้อมทำเอกสาร Data Dictionary</p>
                    </div>

                    <!-- Task 2 -->
                    <div class="bg-slate-800 p-4 rounded-xl border border-slate-600 hover:border-amber-400 hover:shadow-[0_0_15px_rgba(251,191,36,0.15)] transition-all cursor-pointer group">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-blue-500/20 text-blue-400 text-xs px-2 py-1 rounded-md font-bold">ปานกลาง</span>
                            <span class="text-slate-500 text-xs">กำหนด: 12 พ.ย.</span>
                        </div>
                        <h4 class="text-white font-bold mb-1 group-hover:text-amber-400 transition-colors">อัปเดต API Documentation</h4>
                        <p class="text-sm text-slate-400 mb-4 line-clamp-2">เขียนเอกสารคู่มือการใช้งาน RESTful API ในส่วนของการจัดการตะกร้าสินค้าให้กับทีม Frontend</p>
                    </div>
                </div>
            </div>

            <!-- คอลัมน์: กำลังทำ (In Progress) -->
            <div class="bg-slate-800/50 rounded-2xl p-4 border border-slate-700 h-fit relative">
                <!-- เส้นขอบเรืองแสงตกแต่งคอลัมน์ -->
                <div class="absolute inset-0 border-2 border-cyan-500/20 rounded-2xl pointer-events-none"></div>

                <div class="flex items-center justify-between mb-4 border-b border-slate-700 pb-2 relative z-10">
                    <h3 class="text-lg font-bold text-cyan-400 flex items-center gap-2">
                        <span>⏳</span> กำลังทำ
                    </h3>
                    <span class="bg-cyan-500/20 text-cyan-400 text-xs px-2 py-1 rounded-full border border-cyan-500/30">1 งาน</span>
                </div>
                
                <div class="space-y-4 relative z-10">
                    <!-- Task 3 -->
                    <div class="bg-slate-800 p-4 rounded-xl border border-cyan-500/50 shadow-[0_0_15px_rgba(34,211,238,0.1)] hover:shadow-[0_0_25px_rgba(34,211,238,0.2)] transition-all cursor-pointer group">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-red-500/20 text-red-400 text-xs px-2 py-1 rounded-md font-bold">ด่วนมาก</span>
                            <span class="text-cyan-400 text-xs font-bold animate-pulse">กำลังทำงาน...</span>
                        </div>
                        <h4 class="text-white font-bold mb-1 group-hover:text-cyan-400 transition-colors">พัฒนาระบบ Login ด้วย Social Media</h4>
                        <p class="text-sm text-slate-400 mb-4">เชื่อมต่อ Google และ Facebook OAuth 2.0 เข้ากับระบบ Authentication เดิม</p>
                        
                        <!-- Progress Bar -->
                        <div class="w-full bg-slate-700 rounded-full h-1.5 mt-2">
                            <div class="bg-cyan-400 h-1.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <div class="text-right text-xs text-slate-500 mt-1">65%</div>
                    </div>
                </div>
            </div>

            <!-- คอลัมน์: เสร็จสิ้น (Done) -->
            <div class="bg-slate-800/50 rounded-2xl p-4 border border-slate-700 h-fit">
                <div class="flex items-center justify-between mb-4 border-b border-slate-700 pb-2">
                    <h3 class="text-lg font-bold text-emerald-400 flex items-center gap-2">
                        <span>✅</span> เสร็จสิ้น
                    </h3>
                    <span class="bg-slate-700 text-slate-300 text-xs px-2 py-1 rounded-full">1 งาน</span>
                </div>
                
                <div class="space-y-4 opacity-75 hover:opacity-100 transition-opacity">
                    <!-- Task 4 -->
                    <div class="bg-slate-800 p-4 rounded-xl border border-slate-600 hover:border-emerald-500 hover:shadow-[0_0_15px_rgba(52,211,153,0.15)] transition-all cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-emerald-500/20 text-emerald-400 text-xs px-2 py-1 rounded-md font-bold">เสร็จสมบูรณ์</span>
                            <span class="text-slate-500 text-xs">ส่งเมื่อ: 4 พ.ย.</span>
                        </div>
                        <h4 class="text-slate-300 font-bold mb-1 line-through decoration-slate-500">แก้บัคแสดงผลหน้า Dashboard</h4>
                        <p class="text-sm text-slate-500 line-clamp-2">แก้ไขปัญหา UI ทับซ้อนกันเมื่อแสดงผลบนหน้าจอขนาดเล็ก (Mobile Responsive)</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>
<?php
$pageTitle = "หน้าแรก - MyWebsite";
include 'includes/header.php';
include 'includes/navbar.php';
?>
