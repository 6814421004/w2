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
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-slate-900">
  <!-- เพิ่ม text-center เข้าไปเพื่อให้ปุ่มอยู่ตรงกลาง -->
  <div class="p-12 bg-slate-900 rounded-2xl shadow-[0_0_40px_rgba(52,211,153,0.2)] border border-slate-700 text-center">
    <h1 class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-500">
      Home
    Kidsada Mahawong!
    </h1>
    
    <!-- ส่วนที่เพิ่มใหม่: ปุ่มลิงก์ไปยังหน้า PHP -->
    <div class="mt-10 flex justify-center space-x-6">
      <a href="Bio.php" class="px-8 py-3 bg-emerald-500/10 text-emerald-400 border border-emerald-500/50 rounded-xl hover:bg-emerald-500/20 hover:shadow-[0_0_20px_rgba(52,211,153,0.4)] transition-all duration-300 font-bold tracking-wide">
        Bio
      </a>
      
      
      <a href="assign.php" class="px-8 py-3 bg-cyan-500/10 text-cyan-400 border border-cyan-500/50 rounded-xl hover:bg-cyan-500/20 hover:shadow-[0_0_20px_rgba(34,211,238,0.4)] transition-all duration-300 font-bold tracking-wide">
        Assign
      </a>
    </div>

  </div>
</div>
  </div>
</div>
</h1>
</body>
</html>
<?php
include 'includes/footer.php';
?>
