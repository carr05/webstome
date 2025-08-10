<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin Sekolah</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background:#5955B3;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 240px;
      background: #5955B3;
      color: #fff;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow-y: auto;
      z-index: 10;
     
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      border-radius: 10px;
      margin: 4px 12px;
      transition: all 0.3s ease;
    }

    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.15);
      transform: translateX(5px);
    }

    .sidebar a.active {
      background-color: rgba(255, 255, 255, 0.25);
      border-left: 4px solid #fff;
    }

    .sidebar-bottom {
      padding: 20px;
      font-size: 0.9rem;
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    /* Main Container */
    .main-container {
      margin-left: 240px;
      padding: 20px;
      height: 100vh;
    }

    /* White Scrollable Content */
    .main-content {
      background-color: #f8f9ff;
      border-radius: 20px;
      padding: 30px;
      height: 100%;
      overflow-y: auto;
      box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    }

    /* Statistics Cards */
    .stat-card {
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
      border-radius: 16px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid rgba(89, 85, 179, 0.1);
      transition: all 0.3s ease;
      height: 100%;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(89, 85, 179, 0.15);
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 15px;
      font-size: 24px;
      color: white;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 5px;
    }

    .stat-label {
      font-size: 0.9rem;
      color: #6c757d;
      font-weight: 500;
    }

    /* Recent Updates Card */
    .updates-card {
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid rgba(89, 85, 179, 0.1);
    }

    .update-item {
      display: flex;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid #eee;
      transition: all 0.3s ease;
    }

    .update-item:last-child {
      border-bottom: none;
    }

    .update-item:hover {
      background-color: rgba(89, 85, 179, 0.05);
      border-radius: 10px;
      padding: 15px 10px;
    }

    .update-icon {
      width: 40px;
      height: 40px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: white;
      font-size: 16px;
    }

    .update-content {
      flex: 1;
    }

    .update-title {
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 3px;
      font-size: 0.95rem;
    }

    .update-meta {
      font-size: 0.8rem;
      color: #6c757d;
    }

    .update-time {
      font-size: 0.75rem;
      color: #9ca3af;
    }

    /* Welcome Card */
    .welcome-card {
      background: linear-gradient(135deg, #5955B3 0%, #6B63D8 100%);
      border-radius: 16px;
      padding: 25px;
      color: white;
      box-shadow: 0 8px 30px rgba(89, 85, 179, 0.3);
    }

    .welcome-card h5 {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .welcome-card p {
      opacity: 0.9;
      margin-bottom: 0;
    }

    /* Calendar Style */
    .calendar {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 2 px;
      margin-top: 15px;
    }

    .calendar div {
      text-align: center;
      padding: 5px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 0.85rem;
    }

    .calendar div.header {
      font-weight: 600;
      background: transparent;
      cursor: default;
      color: #6c757d;
    }

    .calendar div.day:hover {
      background-color: rgba(89, 85, 179, 0.1);
    }

    .calendar div.active {
      background-color: #5955B3;
      color: white;
    }

    .note-item {
      background: linear-gradient(135deg, #5955B3 0%, #6B63D8 100%);
      color: white;
      border-radius: 8px;
      padding: 10px;
      margin-bottom: 8px;
      font-size: 0.85rem;
    }

    .calendar-card {
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid rgba(89, 85, 179, 0.1);
      margin-bottom: 15px;
    }

    .notes-card {
      background: linear-gradient(135deg, #fff 0%, #f8f9ff 100%);
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      border: 1px solid rgba(89, 85, 179, 0.1);
    }

    .section-title {
      font-size: 1.1rem;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .sidebar {
        width: 200px;
      }
      .main-container {
        margin-left: 200px;
      }
    }

    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
      }
      .sidebar.show {
        transform: translateX(0);
      }
      .main-container {
        margin-left: 0;
      }
      .stat-number {
        font-size: 2rem;
      }
    }

    .btn-primary {
      background: linear-gradient(135deg, #5955B3 0%, #6B63D8 100%);
      border: none;
      border-radius: 8px;
      font-weight: 500;
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid #e0e7ff;
    }

    .form-control:focus {
      border-color: #5955B3;
      box-shadow: 0 0 0 0.2rem rgba(89, 85, 179, 0.25);
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div>
      <h5 class="text-center mb-4">🎓 Webstome</h5>
      <a href="#" class="active"><i class="bi bi-grid me-2"></i> Dashboard</a>
      
<a href="{{ url('/layout') }}">
    <i class="bi bi-people me-2"></i>Layout
</a>
      <a href="#"><i class="bi bi-book me-2"></i> Data Siswa</a>
      <a href="#"><i class="bi bi-calendar me-2"></i> Agenda</a>
      <a href="#"><i class="bi bi-images me-2"></i> Galeri</a>
      <a href="#"><i class="bi bi-newspaper me-2"></i> Berita</a>
      <a href="#"><i class="bi bi-trophy me-2"></i> Prestasi</a>
    </div>
    <div class="sidebar-bottom">
      <a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a>
      <a href="#"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-container">
    <div class="main-content">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Dashboard</h3>
        <div class="d-flex align-items-center">
          <span class="me-3 text-muted">Selamat datang, Admin!</span>
          <div class="badge bg-primary">Online</div>
        </div>
      </div>

      <div class="row g-4">
        <!-- Welcome Card -->
        <div class="col-lg-8">
          <div class="welcome-card mb-4">
            <h5>🚀 Hello, Admin!</h5>
            <p>Update website sekolahmu bersama Webstome! Kelola konten dengan mudah dan efisien.</p>
          </div>

          <!-- Statistics Cards -->
          <div class="section-title">📊 Statistik Upload Konten</div>
          <div class="row g-3 mb-4">
            <div class="col-md-3 col-6">
              <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #FF6B6B, #FF8E53);">
                  <i class="bi bi-newspaper"></i>
                </div>
                <div class="stat-number" id="newsCount">24</div>
                <div class="stat-label">Berita Published</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #4ECDC4, #44A08D);">
                  <i class="bi bi-images"></i>
                </div>
                <div class="stat-number" id="galleryCount">156</div>
                <div class="stat-label">Foto Galeri</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #A8E6CF, #7FCDCD);">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <div class="stat-number" id="eventCount">12</div>
                <div class="stat-label">Agenda Aktif</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #FFD93D, #FF9800);">
                  <i class="bi bi-trophy"></i>
                </div>
                <div class="stat-number" id="achievementCount">8</div>
                <div class="stat-label">Prestasi Baru</div>
              </div>
            </div>
          </div>

          <!-- Recent Updates -->
          <div class="section-title">🔄 Update Konten Terbaru</div>
          <div class="updates-card">
            <div id="recentUpdates">
              <div class="update-item">
                <div class="update-icon" style="background: linear-gradient(135deg, #FF6B6B, #FF8E53);">
                  <i class="bi bi-newspaper"></i>
                </div>
                <div class="update-content">
                  <div class="update-title">Pengumuman Libur Semester Genap 2025</div>
                  <div class="update-meta">Berita • Dipublish oleh Admin</div>
                </div>
                <div class="update-time">2 jam lalu</div>
              </div>
              <div class="update-item">
                <div class="update-icon" style="background: linear-gradient(135deg, #4ECDC4, #44A08D);">
                  <i class="bi bi-images"></i>
                </div>
                <div class="update-content">
                  <div class="update-title">Foto Kegiatan Bakti Sosial Siswa Kelas XI</div>
                  <div class="update-meta">Galeri • 15 foto ditambahkan</div>
                </div>
                <div class="update-time">5 jam lalu</div>
              </div>
              <div class="update-item">
                <div class="update-icon" style="background: linear-gradient(135deg, #A8E6CF, #7FCDCD);">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <div class="update-content">
                  <div class="update-title">Jadwal Ujian Tengah Semester</div>
                  <div class="update-meta">Agenda • Dijadwalkan 15 Agustus 2025</div>
                </div>
                <div class="update-time">1 hari lalu</div>
              </div>
              <div class="update-item">
                <div class="update-icon" style="background: linear-gradient(135deg, #FFD93D, #FF9800);">
                  <i class="bi bi-trophy"></i>
                </div>
                <div class="update-content">
                  <div class="update-title">Juara 1 Lomba Robotika Tingkat Provinsi</div>
                  <div class="update-meta">Prestasi • Kategori Teknologi</div>
                </div>
                <div class="update-time">2 hari lalu</div>
              </div>
              <div class="update-item">
                <div class="update-icon" style="background: linear-gradient(135deg, #FF6B6B, #FF8E53);">
                  <i class="bi bi-newspaper"></i>
                </div>
                <div class="update-content">
                  <div class="update-title">Program Beasiswa Untuk Siswa Berprestasi</div>
                  <div class="update-meta">Berita • Draft disimpan</div>
                </div>
                <div class="update-time">3 hari lalu</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Calendar & Notes -->
        <div class="col-lg-4">
          <div class="calendar-card">
            <div id="calendar" class="calendar"></div>
          </div>
          
          <div class="notes-card">
            <h6>📝 Notes (<span id="selectedDate">-</span>)</h6>
            <div id="notesList" style="max-height: 200px; overflow-y: auto;"></div>
            <div class="input-group mt-3">
              <input type="text" id="noteInput" class="form-control" placeholder="Tambah catatan...">
              <button class="btn btn-primary" id="addNoteBtn">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const calendarEl = document.getElementById('calendar');
    const notesListEl = document.getElementById('notesList');
    const selectedDateEl = document.getElementById('selectedDate');
    const noteInput = document.getElementById('noteInput');
    const addNoteBtn = document.getElementById('addNoteBtn');

    let notes = {};
    let selectedDate = null;

    // Sample data for statistics animation
    const stats = {
      news: { current: 0, target: 24 },
      gallery: { current: 0, target: 156 },
      events: { current: 0, target: 12 },
      achievements: { current: 0, target: 8 }
    };

    // Animate statistics on page load
    function animateStats() {
      const duration = 2000; // 2 seconds
      const interval = 50; // Update every 50ms
      const steps = duration / interval;

      const elements = {
        news: document.getElementById('newsCount'),
        gallery: document.getElementById('galleryCount'),
        events: document.getElementById('eventCount'),
        achievements: document.getElementById('achievementCount')
      };

      let step = 0;
      const timer = setInterval(() => {
        step++;
        const progress = step / steps;
        
        Object.keys(stats).forEach(key => {
          const current = Math.floor(stats[key].target * progress);
          if (elements[key]) {
            elements[key].textContent = current;
          }
        });

        if (step >= steps) {
          clearInterval(timer);
          // Set final values
          Object.keys(stats).forEach(key => {
            if (elements[key]) {
              elements[key].textContent = stats[key].target;
            }
          });
        }
      }, interval);
    }

    function generateCalendar(year, month) {
      calendarEl.innerHTML = '';
      const daysOfWeek = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
      daysOfWeek.forEach(d => {
        const dayHeader = document.createElement('div');
        dayHeader.textContent = d;
        dayHeader.classList.add('header');
        calendarEl.appendChild(dayHeader);
      });

      const firstDay = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      for (let i = 0; i < firstDay; i++) {
        calendarEl.appendChild(document.createElement('div'));
      }

      for (let day = 1; day <= daysInMonth; day++) {
        const dayEl = document.createElement('div');
        dayEl.textContent = day;
        dayEl.classList.add('day');
        dayEl.addEventListener('click', () => selectDate(`${year}-${month + 1}-${day}`));
        calendarEl.appendChild(dayEl);
      }
    }

    function selectDate(date) {
      selectedDate = date;
      selectedDateEl.textContent = date;
      renderNotes();
      document.querySelectorAll('.calendar .day').forEach(el => el.classList.remove('active'));
      [...calendarEl.querySelectorAll('.day')].find(el => el.textContent == date.split('-')[2])?.classList.add('active');
    }

    function renderNotes() {
      notesListEl.innerHTML = '';
      if (notes[selectedDate]) {
        notes[selectedDate].forEach((note, index) => {
          const noteEl = document.createElement('div');
          noteEl.classList.add('note-item');
          noteEl.innerHTML = `
            ${note}
            <i class="bi bi-x float-end" style="cursor: pointer;" onclick="deleteNote(${index})"></i>
          `;
          notesListEl.appendChild(noteEl);
        });
      }
    }

    function deleteNote(index) {
      if (notes[selectedDate]) {
        notes[selectedDate].splice(index, 1);
        if (notes[selectedDate].length === 0) {
          delete notes[selectedDate];
        }
        renderNotes();
      }
    }

    addNoteBtn.addEventListener('click', addNote);
    noteInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') addNote();
    });

    function addNote() {
      const noteText = noteInput.value.trim();
      if (!noteText || !selectedDate) return;
      if (!notes[selectedDate]) notes[selectedDate] = [];
      notes[selectedDate].push(noteText);
      noteInput.value = '';
      renderNotes();
    }

    // Initialize
    const today = new Date();
    generateCalendar(today.getFullYear(), today.getMonth());
    selectDate(`${today.getFullYear()}-${today.getMonth() + 1}-${today.getDate()}`);
    
    // Start animation after page loads
    setTimeout(animateStats, 500);

    // Add some sample notes
    setTimeout(() => {
      const todayKey = `${today.getFullYear()}-${today.getMonth() + 1}-${today.getDate()}`;
      notes[todayKey] = ['Review berita terbaru', 'Update galeri sekolah'];
      renderNotes();
    }, 1000);
  </script>

</body>
</html>