<?php
class Product
{
  // Get All Product
  public static function getAll()
  {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM phieudangkythuctap');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getProductbyCategory($category)
  {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM phieudangkythuctap WHERE category = "' . $category . '"');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function pagination($page)
  {
    global $pdo;
    $perPage = 5;

    // Calculate Total pages
    $stmt = $pdo->query('SELECT count(*) FROM phieudangkythuctap');
    $total_results = $stmt->fetchColumn();
    $total_pages = ceil($total_results / $perPage);

    // Current page
    $starting_limit = ($page - 1) * $perPage;

    // Query to fetch users
    $query = "SELECT * FROM phieudangkythuctap ORDER BY MaSV  LIMIT $starting_limit,$perPage";

    // Fetch all users for current page
    $users = $pdo->query($query)->fetchAll();
    return $users;
  }

  public static function getCategory()
  {
    global $pdo;
    $stmt = $pdo->query('SELECT DISTINCT category FROM phieudangkythuctap');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getReview($prdid)
  {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM review WHERE prdid = "' . $prdid . '"');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Create Product
  public static function create(
    $hoten,
    $category,
    $chuyennganh,
    $congty,
    $image,
    $image1,
    $image2,
    $image3,
    $image4,
    $image5,
    $image6,
    $image7,
    $image8,
    $des1,
    $des2,
    $ttdes1,
    $ttdes2,
    $embed
  ) {
    global $pdo;

    $sql = "INSERT INTO phieudangkythuctap (HoTen, category,ChuyenNganh, CongTy, Image, Image1, Image2, Image3, 
                                            Image4, Image5, Image6, Image7, Image8, des1, des2, ttdes1, ttdes2, embed) 
            VALUES (:hoten, :category,:chuyennganh, :congty, :image, :image1, :image2, :image3, 
                    :image4, :image5, :image6, :image7, :image8, :des1, :des2, :ttdes1, :ttdes2, :embed);";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':hoten', $hoten);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':chuyennganh', $chuyennganh);
    $stmt->bindParam(':congty', $congty);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':image1', $image1);
    $stmt->bindParam(':image2', $image2);
    $stmt->bindParam(':image3', $image3);
    $stmt->bindParam(':image4', $image4);
    $stmt->bindParam(':image5', $image5);
    $stmt->bindParam(':image6', $image6);
    $stmt->bindParam(':image7', $image7);
    $stmt->bindParam(':image8', $image8);
    $stmt->bindParam(':des1', $des1);
    $stmt->bindParam(':des2', $des2);
    $stmt->bindParam(':ttdes1', $ttdes1);
    $stmt->bindParam(':ttdes2', $ttdes2);
    $stmt->bindParam(':embed', $embed);

    return $stmt->execute();
  }

  // Delete Product
  public static function delete($id)
  {
    global $pdo;
    $sql = "DELETE FROM `phieudangkythuctap` WHERE `phieudangkythuctap`.`MaSV` = $id;
            SET @num:= 0;
            UPDATE `phieudangkythuctap` SET `MaSV` = @num:= (@num + 1);
            ALTER TABLE `phieudangkythuctap` AUTO_INCREMENT = 1;";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
  }

  // Update Product
  public static function update(
    $id,
    $name,
    $price,
    $des,
    $image,
    $image1,
    $image2,
    $image3,
    $image4,
    $image5,
    $image6,
    $image7,
    $image8,
    $des1,
    $des2,
    $ttdes1,
    $ttdes2,
    $embed
  ) {
    global $pdo;
    $sql = "UPDATE `phieudangkythuctap` SET `HoTen` = '$name', `ChuyenNganh` = '$price', 
                                            `CongTy` = '$des',`Image` = '$image',
                                            `Image1` = '$image1', `Image2` = '$image2', 
                                            `Image3` = '$image3',`Image4` = '$image4',
                                            `Image5` = '$image5', `Image6` = '$image6', 
                                            `Image7` = '$image7',`Image8` = '$image8',
                                            `des1` = '$des1', `des2` = '$des2', 
                                            `ttdes1` = '$ttdes1',`ttdes2` = '$ttdes2', `embed` = '$embed'   
            WHERE `phieudangkythuctap`.`MaSV` = '$id'";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
  }

  // Find Product
  public static function find($id)
  {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM phieudangkythuctap WHERE MaSV =:id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Search Product
  public static function search($keyword)
  {
    global $pdo;
    $sql = 'SELECT * FROM phieudangkythuctap WHERE HoTen LIKE :keyword ORDER BY MaSV DESC ';
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    return $result;
  }

  public static function createReview($prdid, $msg, $name, $email)
  {
    global $pdo;
    $sql = "INSERT INTO review (prdid , msg, name, email) 
                VALUES (:prdid, :msg, :name, :email);
                SET @num:= 0;
                UPDATE `review` SET `id` = @num:= (@num + 1);
                ALTER TABLE `review` AUTO_INCREMENT = 1;";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':prdid', $prdid);
    $stmt->bindParam(':msg', $msg);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    return $stmt->execute();
  }

  // Show Cart After Ordered
  public static function getShowCart($userid)
  {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM orderdetail WHERE userid="' . $userid . '"');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
