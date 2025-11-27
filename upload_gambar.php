<?php
include 'connect.php';

// Fetch Categories
$stmt = $pdo->query("SELECT * FROM categories");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT c.id, c.name, COUNT(g.id) AS total_gambar
        FROM categories c
        LEFT JOIN gallery g ON c.id = g.category_id
        GROUP BY c.id, c.name";

$categories = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESACO - Upload Gallery</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            /* min-height: 100vh; */
        }


        /* Main Content */
        .main-content {
            margin-left: 250px;
            /* flex: 1;
            display: flex; */
            /* flex-direction: column; */
            width: 1025px;
            /* min-height: 100vh; */
            /* padding: 20px; */
            box-sizing: border-box;
        }

        .header {
            background: linear-gradient(135deg, #4285f4, #6fa8f5);
            color: white;
            padding: 40px;
            border-radius: 0 0 50px 0;
            /* width: 100%; */
        }

        .header h1 {
            font-size: 32px;
            font-weight: 700;
        }

        .content-wrapper {
            display: flex;
            padding: 30px;
            gap: 30px;
            flex: 1;
        }

        .upload-section {
            flex: 2;
        }

        .section-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            background-color: white;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .upload-area:hover {
            border-color: #4285f4;
            background-color: #f8fbff;
        }

        .upload-area.drag-over {
            border-color: #4285f4;
            background-color: #f0f7ff;
        }

        .upload-icon {
            width: 60px;
            height: 60px;
            background-color: #e0e0e0;
            margin: 0 auto 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #999;
        }

        .upload-text {
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .file-button {
            background: linear-gradient(135deg, #4285f4, #6fa8f5);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .file-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(66, 133, 244, 0.3);
        }

        .file-info {
            color: #999;
            font-size: 12px;
            margin-top: 15px;
        }

        .preview-section {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .preview-title {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .preview-area {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            color: #999;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preview-image {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
        }

        /* Right Sidebar */
        .right-sidebar {
            flex: 1;
            max-width: 300px;
        }

        .form-section {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #4285f4;
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.1);
        }

        .form-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f9f9f9;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 40px;
        }

        .upload-btn {
            width: 100%;
            background: linear-gradient(135deg, #4285f4, #6fa8f5);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(66, 133, 244, 0.3);
        }

        .upload-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .add-category-btn {
            background: transparent;
            color: #4285f4;
            border: 1px solid #4285f4;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .add-category-btn:hover {
            background: #4285f4;
            color: white;
        }

        /* Categories Section */
        .categories-section {
            margin-top: 40px;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .category-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .category-info h3 {
            color: #333;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .category-count {
            color: #666;
            font-size: 14px;
        }

        .category-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.3s ease;
            color: #666;
        }

        .action-btn:hover {
            background-color: #f0f0f0;
            color: #333;
        }

        .edit-btn:hover {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .delete-btn:hover {
            background-color: #ffebee;
            color: #d32f2f;
        }

        /* Hidden file input */
        #fileInput {
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .content-wrapper {
                flex-direction: column;
                padding: 20px;
            }
            
            .right-sidebar {
                max-width: none;
            }
            
            .category-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
    <div class="container">
    
    <?php 
    include 'sidebar.php';
    ?>

        <div class="main-content">
            <div class="header"><h1>Upload Galery</h1></div>
            <div class="content-wrapper">
                <div class="upload-section">
                    <h2 class="section-title">Upload Gambar Baru</h2>
                    <div class="upload-area" id="uploadArea">
                        <div class="upload-icon">🖼️</div>
                        <div class="upload-text">Tarik dan letakkan gambar disini atau klik untuk memilih</div>
                        <button class="file-button" onclick="document.getElementById('fileInput').click()">Pilih File</button>
                        <div class="file-info">Format yang didukung: PNG, JPG, JPEG (Maks. 5MB)</div>
                    </div>
                    <input type="file" class="form-input" id="fileInput" name="image" accept="image/*" multiple enctype="multipart/form-data">
                    <img id="previewImage" src="" alt="Preview Gambar" style="display:none; max-height:200px; margin-top:10px;">
                    <div class="preview-section">
                        <h3 class="preview-title">Preview</h3>
                        <div class="preview-area" id="previewArea">Belum ada gambar yang dipilih</div>
                    </div>
                </div>

                <div class="right-sidebar">
                    <div class="form-section">
                        <div class="form-group">
                            <label class="form-label">Judul Gambar :</label>
                            <input type="text" id="imageTitle" name="alt_text" class="form-input" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kategori :</label>
                            <select class="form-select" id="categorySelect">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                            <?php endforeach; ?>
                                </select>
                            </div>
                            <button class="upload-btn" id="uploadBtn" >Upload Gambar</button>
                        </div>

                        <div class="form-section">
                            <h3 class="form-label">Tambah Kategori :</h3>
                            <div class="form-group">
                                <input type="text" class="form-input" id="newCategory" placeholder="Kategori">
                            </div>
                            <button class="add-category-btn" id="addCategoryBtn">Tambah Kategori</button>
                        </div>
                    </div>
            </div>

            <div class="upload-section" style="padding: 0 30px 30px;">
                <h2 class="section-title">Kategori yang tersedia</h2>
                <div class="category-grid" id="categoryGrid">
                    <?php foreach ($categories as $category): ?>
                        <div class="category-card">
                            <div class="category-info">
                                <h3><?php echo $category['name']; ?></h3>
                                <div class="category-count">
                                    <?php echo $category['total_gambar']; ?> gambar
                                </div>
                            </div>
                            <div class="category-actions">
                                <button class="action-btn edit-btn" onclick="editCategory('<?php echo $category['id']; ?>')">✏️</button>
                                <button class="action-btn delete-btn" onclick="deleteCategory('<?php echo $category['id']; ?>')">🗑️</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="../Esaco/script.js"></script>
</body>
</html>
