<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #5955B3; margin: 0; }
    .main-container { margin-left: 240px; padding: 20px; height: 100vh; }
    .main-content { background-color: #f8f9ff; border-radius: 20px; padding: 30px; height: 100%; overflow-y: auto; box-shadow: 0 8px 40px rgba(0,0,0,0.1); }
    .card-section { background-color: white; border-radius: 15px; padding: 20px; margin-bottom: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
   .header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid #5955B3;
        }

        .header h1 {
            color: #5955B3;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .add-menu-btn {
            background: linear-gradient(135deg, #5955B3, #7B68EE);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(89, 85, 179, 0.3);
        }

        .add-menu-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(89, 85, 179, 0.4);
        }

        .search-box {
            position: relative;
            min-width: 300px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 50px 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-box input:focus {
            border-color: #5955B3;
            box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
        }

        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .menu-list {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 20px 25px;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            background: #f8f9ff;
            transform: translateX(5px);
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #5955B3, #7B68EE);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-right: 20px;
        }

        .menu-details {
            flex: 1;
            margin-right: 20px;
        }

        .menu-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .menu-path {
            font-size: 0.9rem;
            color: #666;
        }

        .menu-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .toggle-switch {
            position: relative;
            width: 60px;
            height: 30px;
            margin-right: 15px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #5955B3;
        }

        input:checked + .slider:before {
            transform: translateX(30px);
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .edit-btn {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            margin-right: 5px;
        }

        .edit-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
        }

        .delete-btn {
            background: linear-gradient(135deg, #f44336, #d32f2f);
            color: white;
        }

        .delete-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(244, 67, 54, 0.3);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            background: linear-gradient(135deg, #5955B3, #7B68EE);
            color: white;
            padding: 20px 25px;
            border-radius: 20px 20px 0 0;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            line-height: 1;
        }

        .close:hover {
            opacity: 0.7;
        }

        .modal-body {
            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #5955B3;
            box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
        }

        .modal-footer {
            padding: 20px 25px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .btn {
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #5955B3, #7B68EE);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(89, 85, 179, 0.3);
        }

        .btn-secondary {
            background: #f5f5f5;
            color: #666;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #999;
        }

        @media (max-width: 768px) {
            .card-section {
                padding: 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .action-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                min-width: auto;
            }

            .menu-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .menu-actions {
                width: 100%;
                justify-content: flex-end;
            }
        }
    </style>
</head>
<body>
  @extends('layouts.main')
    <div class="main-container">
        <div class="main-content">
            <div class="card-section">
                <div class="header">
                    <h1><i class="fas fa-bars"></i> Menu Manager</h1>
                    <p>Kelola menu sidebar dengan mudah dan efisien</p>
                </div>

                <div class="action-bar">
                    <button class="add-menu-btn" onclick="openAddModal()">
                        <i class="fas fa-plus"></i> Tambah Menu
                    </button>
                    <div class="search-box">
                        <input type="text" placeholder="Cari menu..." oninput="searchMenu(this.value)">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="menu-list" id="menuList">
                    <!-- Menu items will be populated by JavaScript -->
                </div>

                <!-- Add/Edit Modal -->
                <div id="menuModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 id="modalTitle">Tambah Menu</h2>
                            <span class="close" onclick="closeModal()">&times;</span>
                        </div>
                        <div class="modal-body">
                            <form id="menuForm">
                                <div class="form-group">
                                    <label for="menuName">Nama Menu</label>
                                    <input type="text" id="menuName" required>
                                </div>
                                <div class="form-group">
                                    <label for="menuIcon">Icon (Font Awesome class)</label>
                                    <input type="text" id="menuIcon" placeholder="fas fa-home" required>
                                </div>
                                <div class="form-group">
                                    <label for="menuPath">Path/URL</label>
                                    <input type="text" id="menuPath" placeholder="/dashboard" required>
                                </div>
                                <div class="form-group">
                                    <label for="menuOrder">Urutan</label>
                                    <input type="number" id="menuOrder" min="1" required>
                                </div>
                                <div class="form-group">
                                    <label for="menuStatus">Status</label>
                                    <select id="menuStatus">
                                        <option value="active">Aktif</option>
                                        <option value="inactive">Tidak Aktif</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
                            <button type="button" class="btn btn-primary" onclick="saveMenu()">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function saveMenu() {
    const id = currentEditId;
    const data = {
        name: document.getElementById('menuName').value,
        icon: document.getElementById('menuIcon').value,
        path: document.getElementById('menuPath').value,
        order: document.getElementById('menuOrder').value,
        status: document.getElementById('menuStatus').value,
        _token: "{{ csrf_token() }}"
    };

    const url = id 
        ? `/sidebar/update/${id}` 
        : `/sidebar/store`;

    const method = id ? 'PUT' : 'POST';

    fetch(url, {
        method: method,
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(res => {
        alert(res.message);
        location.reload();
    });
}

function deleteMenu(id) {
    if (!confirm("Hapus menu ini?")) return;

    fetch(`/sidebar/delete/${id}`, {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ _token: "{{ csrf_token() }}" })
    })
    .then(res => res.json())
    .then(res => {
        alert(res.message);
        location.reload();
    });
}

function toggleMenuStatus(id) {
    fetch(`/sidebar/toggle/${id}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ _token: "{{ csrf_token() }}" })
    })
    .then(res => res.json())
    .then(res => {
        console.log("Status updated");
    });
}

    </script>
</body>
</html>

