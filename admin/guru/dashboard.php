<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
   <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
   <div class="container">
      <div class="sidebar">
         <div class="profile">
            <h2>Hello, Jhondoe</h2>
         </div>
         <a class="menu-item active" href="#biodata-siswa">Biodata Siswa</a>
         <a class="menu-item" href="#hasil">Hasil</a>
         <a class="menu-item" href="#rekap-data">Rekap Data</a>
         <button class="logout-btn">Logout</button>
      </div>
      <div class="content">
         <section id="biodata-siswa" class="section">
            <h1>Biodata Siswa</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     
                     ?>
                  </tbody>
               </table>
            </div>
         </section>
         <section id="hasil" class="section">
            <h1>Hasil</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nama Siswa</th>
                        <th>Hasil</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     
                     ?>
                  </tbody>
               </table>
            </div>
         </section>
         <section id="rekap-data" class="section">
            <h1>Rekap Data</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Hasil</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     
                     ?>
                  </tbody>
               </table>
            </div>
         </section>
      </div>
   </div>
   <script>
   // ambil semua elemen menu-item dan section
   const menuItems = document.querySelectorAll('.menu-item');
   const sections = document.querySelectorAll('.section');

   // tambahkan event listener untuk setiap menu-item
   menuItems.forEach(item => {
      item.addEventListener('click', () => {
         // ambil href dari menu-item
         const target = item.getAttribute('href');


         // hilangkan semua class active dari menu-item dan section
         menuItems.forEach(item => item.classList.remove('active'));
         sections.forEach(section => section.classList.remove('active'));

         // tambahkan class active ke menu-item yang sesuai dengan target
         item.classList.add('active');

         // tambahkan class active ke section yang sesuai dengan target
         document.querySelector(target).classList.add('active');
      });
   });

   // buat Biodata Siswa section aktif saat halaman pertama kali di-load
   document.querySelector('#biodata-siswa').classList.add('active');

   // buat semua section tidak aktif saat halaman pertama kali di-load
   sections.forEach(section => section.classList.remove('active'));

   // buat section yang aktif hanya yang sesuai dengan menu-item yang diklik
   const initialTarget = menuItems[0].getAttribute('href');
   document.querySelector(initialTarget).classList.add('active');
   </script>
</body>

</html>