<?php

//main database update code

function authenticate_user($email,$password){
	try{
	include 'config/dbconfig.php';
	$encrypted_password = md5($password);
	$stmt = $db->prepare("SELECT parent_id,first_name,last_name,family_id FROM parent WHERE email = ? AND password = ?");
	$stmt -> bindParam(1,$email);
	$stmt -> bindParam(2,$encrypted_password);
	$stmt -> execute();
	$oneparent = array();
	while($row = $stmt->fetch()){
	array_push($oneparent, array('parent_id' => $row['parent_id'], 'first_name' => $row['first_name'], 'last_name' => $row['last_name'], 'family_id' => $row['family_id']));
	}
	return $oneparent;
	} catch (PDOException $ex){
	echo 'error!';
	}
}

function add_parent($parent){
	try{
	$first_name = $parent->get_first_name();
	$last_name = $parent->get_last_name();
	$gender = $parent->get_gender();
	$email = $parent->get_email();
	$password = $parent->get_password();
	$encrypted_password = md5($password);
	$blood_type = $parent->get_blood_type();
	$parent_image_id = $parent->get_parent_image_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO parent(first_name, last_name, gender, email, password, blood_type, parent_image_id, account_stats) VALUES (?,?,?,?,?,?,?,1)");
	$stmt -> bindParam(1, $first_name);
	$stmt -> bindParam(2, $last_name);
	$stmt -> bindParam(3, $gender);
	$stmt -> bindParam(4, $email);
	$stmt -> bindParam(5, $encrypted_password);
	$stmt -> bindParam(6, $blood_type);
	$stmt -> bindParam(7, $parent_image_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function activate_parent($parent){
	try{
	$parent_id = $parent->get_parent_id();
	$first_name = $parent->get_first_name();
	$last_name = $parent->get_last_name();
	$gender = $parent->get_gender();
	$email = $parent->get_email();
	$password = $parent->get_password();
	$blood_type = $parent->get_blood_type();
	$parent_image_id = $parent->get_parent_image_id();
	$account_status = $parent->get_account_status();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("UPDATE parent SET account_status=1 WHERE parent_id=?");
	$stmt -> bindParam(1, $parent_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function deactivate_parent($parent){
	try{
	$parent_id = $parent->get_parent_id();
	$first_name = $parent->get_first_name();
	$last_name = $parent->get_last_name();
	$gender = $parent->get_gender();
	$email = $parent->get_email();
	$password = $parent->get_password();
	$blood_type = $parent->get_blood_type();
	$parent_image_id = $parent->get_parent_image_id();
	$account_status = $parent->get_account_status();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("UPDATE parent SET account_status=0 WHERE parent_id=?");
	$stmt -> bindParam(1, $parent_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}


function add_child($child){
	try{
	$first_name = $child->get_first_name();
	$last_name = $child->get_last_name();
	$gender = $child->get_gender();
	$birthdate = $child->get_birthdate();
	$blood_type = $child->get_blood_type();
	$family_id = $child->get_family_id();
	$child_image_id = $child->get_child_image_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO child (first_name,last_name,gender,birthdate,blood_type,family_id,child_image_id) VALUES (?,?,?,?,?,?,?)");
	$stmt -> bindParam(1, $first_name);
	$stmt -> bindParam(2, $last_name);
	$stmt -> bindParam(3, $gender);
	$stmt -> bindParam(4, $birthdate);
	$stmt -> bindParam(5, $blood_type);
	$stmt -> bindParam(6, $family_id);
	$stmt -> bindParam(7, $child_image_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function delete_child($child){
	try{
	$child_id = $child->get_child_id();
	$first_name = $child->get_first_name();
	$last_name = $child->get_last_name();
	$gender = $child->get_gender();
	$birthdate = $child->get_birthdate();
	$blood_type = $child->get_blood_type();
	$family_id = $child->get_family_id();
	$child_image_id = $child->get_child_image_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("DELETE FROM child WHERE child_id=?");
	$stmt -> bindParam(1, $child_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_family($family){
	try{
	$father_id = $family->get_father_id();
	$mother_id = $family->get_mother_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO family (father_id, mother_id) VALUES (?,?)");
	$stmt -> bindParam(1, $father_id);
	$stmt -> bindParam(2, $mother_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_comment($comment){
	try{
	$parent_id = $comment->get_parent_id();
	$post_id = $comment->get_comment_id();
	$comment_content = $comment->get_comment_content();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO comment (post_id,parent_id,comment_date,comment_content) VALUES (?,?,NOW(),?)");
	$stmt -> bindParam(1, $post_id);
	$stmt -> bindParam(2, $parent_id);
	$stmt -> bindParam(3, $comment_content);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function delete_comment($comment){
	try{
	$comment_id = $comment->get_comment_id();
	$parent_id = $comment->get_parent_id();
	$post_id = $comment->get_comment_id();
	$comment_content = $comment->get_comment_content();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("DELETE FROM comment WHERE comment_id=?");
	$stmt -> bindParam(1, $comment_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_category_reference($category_reference){
	try{
	$category_name = $category_reference->get_category_name();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO category_reference (category_name) VALUES (?)");
	$stmt -> bindParam(1, $category_name);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_doctor($doctor){
	try{
	$parent_id = $doctor->get_parent_id();
	$specialty = $doctor->get_specialty();
	$hospital = $doctor->get_hospital();
	$hospital_address = $doctor->get_hospital_address();
	$consultation = $doctor->get_consultation();
	$contact1 = $doctor->get_contact1();
	$contact2 = $doctor->get_contact2();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO doctor (parent_id,specialty,hospital,hospital_address,consultation,contact1,contact2) VALUES (?,?,?,?,?,?,?)");
	$stmt -> bindParam(1, $parent_id);
	$stmt -> bindParam(2, $specialty);
	$stmt -> bindParam(3, $hospital);
	$stmt -> bindParam(4, $hospital_address);
	$stmt -> bindParam(5, $consultation);
	$stmt -> bindParam(6, $contact1);
	$stmt -> bindParam(7, $contact2);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function edit_doctor($doctor){
	try{
	$doctor_id = $doctor->get_doctor_id();
	$parent_id = $doctor->get_parent_id();
	$specialty = $doctor->get_specialty();
	$hospital = $doctor->get_hospital();
	$hospital_address = $doctor->get_hospital_address();
	$consultation = $doctor->get_consultation();
	$contact1 = $doctor->get_contact1();
	$contact2 = $doctor->get_contact2();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("UPDATE doctor SET specialty=?, hospital=?, hospital_address=?, consultation=?, contact1=?, contact2=? WHERE doctor_id=?");
	$stmt -> bindParam(1, $specialty);
	$stmt -> bindParam(2, $hospital);
	$stmt -> bindParam(3, $hospital_address);
	$stmt -> bindParam(4, $consultation);
	$stmt -> bindParam(5, $contact1);
	$stmt -> bindParam(6, $contact2);
	$stmt -> bindParam(7, $doctor_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_gallery($gallery){
	try{
	$gallery_id = $gallery->get_gallery_id();
	$filename = $gallery->get_filename();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO gallery (filename) VALUES (?)");
	$stmt -> bindParam(1, $filename);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_medical_history($medicalhistory){
	try{
	$parent_id = $medicalhistory->get_parent_id();
	$medical_history_id = $medicalhistory->get_medical_history_id();
	$anemia = $medicalhistory->get_anemia();
	$asthma = $medicalhistory->get_asthma();
	$bleeding_disorder = $medicalhistory->get_bleeding_disorder();
	$diabetes = $medicalhistory->get_diabetes();
	$epilepsy = $medicalhistory->get_epilepsy();
	$heart_disorder = $medicalhistory->get_heart_disorder();
	$high_blood = $medicalhistory->get_high_blood();
	$high_cholesterol = $medicalhistory->get_high_cholesterol();
	$liver_disorder = $medicalhistory->get_liver_disorder();
	$kidney_disorder = $medicalhistory->get_kidney_disorder();
	$nasal_allergy = $medicalhistory->get_nasal_allergy();
	$tuberculosis = $medicalhistory->get_tuberculosis();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO medical_history (parent_id, anemia, asthma, bleeding_disorder, diabetes, epilepsy, heart_disorder, high_blood, high_cholesterol, liver_disorder, kidney_disorder, nasal_allergy, tuberculosis) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt -> bindParam(1, $parent_id);
	$stmt -> bindParam(2, $anemia);
	$stmt -> bindParam(3, $asthma);
	$stmt -> bindParam(4, $bleeding_disorder);
	$stmt -> bindParam(5, $diabetes);
	$stmt -> bindParam(6, $epilepsy);
	$stmt -> bindParam(7, $heart_disorder);
	$stmt -> bindParam(8, $high_blood);
	$stmt -> bindParam(9, $high_cholesterol);
	$stmt -> bindParam(10, $liver_disorder);
	$stmt -> bindParam(11, $kidney_disorder);
	$stmt -> bindParam(12, $nasal_allergy);
	$stmt -> bindParam(13, $tuberculosis);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function edit_medical_history($medicalhistory){
	try{
	$parent_id = $medicalhistory->get_parent_id();
	$medical_history_id = $medicalhistory->get_medical_history_id();
	$anemia = $medicalhistory->get_anemia();
	$asthma = $medicalhistory->get_asthma();
	$bleeding_disorder = $medicalhistory->get_bleeding_disorder();
	$diabetes = $medicalhistory->get_diabetes();
	$epilepsy = $medicalhistory->get_epilepsy();
	$heart_disorder = $medicalhistory->get_heart_disorder();
	$high_blood = $medicalhistory->get_high_blood();
	$high_cholesterol = $medicalhistory->get_high_cholesterol();
	$liver_disorder = $medicalhistory->get_liver_disorder();
	$kidney_disorder = $medicalhistory->get_kidney_disorder();
	$nasal_allergy = $medicalhistory->get_nasal_allergy();
	$tuberculosis = $medicalhistory->get_tuberculosis();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("UPDATE medical_history SET anemia=?, asthma=?, bleeding_disorder=?, diabetes=?, epilepsy=?, heart_disorder=?, high_blood=?, high_cholesterol=?, liver_disorder=?, kidney_disorder=?, nasal_allergy=?, tuberculosis=? WHERE parent_id=?");
	$stmt -> bindParam(1, $anemia);
	$stmt -> bindParam(2, $asthma);
	$stmt -> bindParam(3, $bleeding_disorder);
	$stmt -> bindParam(4, $diabetes);
	$stmt -> bindParam(5, $epilepsy);
	$stmt -> bindParam(6, $heart_disorder);
	$stmt -> bindParam(7, $high_blood);
	$stmt -> bindParam(8, $high_cholesterol);
	$stmt -> bindParam(9, $liver_disorder);
	$stmt -> bindParam(10, $kidney_disorder);
	$stmt -> bindParam(11, $nasal_allergy);
	$stmt -> bindParam(12, $tuberculosis);
	$stmt -> bindParam(13, $parent_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_post($post){
	try{
	$to_parent_id = $post->get_to_parent_id();
	$from_parent_id = $post->get_from_parent_id();
	$child_id = $post->get_child_id();
	$post_content = $post->get_post_content();
	$post_category_id = $post->get_post_category_id();
	$file_id = $post->get_file_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO post (to_parent_id, from_parent_id, child_id, post_content, post_date, post_category_id, file_id) VALUES (?,?,?,?,NOW(),?,?)");
	$stmt -> bindParam(1, $to_parent_id);
	$stmt -> bindParam(2, $from_parent_id);
	$stmt -> bindParam(3, $child_id);
	$stmt -> bindParam(4, $post_content);
	$stmt -> bindParam(5, $post_category_id);
	$stmt -> bindParam(6, $file_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function delete_post($post){
	try{
	$post_id = $post->get_post_id();
	$to_parent_id = $post->get_to_parent_id();
	$from_parent_id = $post->get_from_parent_id();
	$child_id = $post->get_child_id();
	$post_content = $post->get_post_content();
	$post_category_id = $post->get_post_category_id();
	$file_id = $post->get_file_id();
	include 'config/dbconfig.php';
	
	$stmt = $db->prepare("DELETE FROM comment WHERE post_id=?");
	$stmt -> bindParam(1, $to_parent_id);
	$stmt-> execute();
	
	$stmt = $db->prepare("DELETE FROM post WHERE post_id=?");
	$stmt -> bindParam(1, $to_parent_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_sharing($sharing){ 
	try{
	$sharing_id = $sharing->get_sharing_id();
	$from_parent_id = $sharing->get_from_parent_id();
	$to_parent_id = $sharing->get_to_parent_id();
	$to_child_id = $sharing->get_to_child_id();
	$privilege = $sharing->get_privilege();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO sharing (from_parent_id, to_parent_id, to_child_id) VALUES (?,?,?)");
	$stmt -> bindParam(1, $from_parent_id);
	$stmt -> bindParam(2, $to_parent_id);
	$stmt -> bindParam(3, $to_child_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function delete_sharing($sharing){
	try{
	$sharing_id = $sharing->get_sharing_id();
	$from_parent_id = $sharing->get_from_parent_id();
	$to_parent_id = $sharing->get_to_parent_id();
	$to_child_id = $sharing->get_to_child_id();
	$privilege = $sharing->get_privilege();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("DELETE FROM sharing WHERE sharing_id=?");
	$stmt -> bindParam(1, $sharing_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function edit_sharing($sharing){
	try{
	$sharing_id = $sharing->get_sharing_id();
	$from_parent_id = $sharing->get_from_parent_id();
	$to_parent_id = $sharing->get_to_parent_id();
	$to_child_id = $sharing->get_to_child_id();
	$privilege = $sharing->get_privilege();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("UPDATE sharing SET privilege=? WHERE sharing_id=?");
	$stmt -> bindParam(1, $sharing_id);
	$stmt -> bindParam(2, $privilege);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_sharing_doctor($sharing_doctor){
	try{
	$sharing_doctor_id = $sharing_doctor->get_sharing_doctor_id();
	$doctor_id = $sharing_doctor->get_doctor_id();
	$parent_id = $sharing_doctor->get_parent_id();
	$child_id = $sharing_doctor->get_child_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO sharing_doctor (doctor_id, parent_id, child_id) VALUES (?,?,?)");
	$stmt -> bindParam(1, $doctor_id);
	$stmt -> bindParam(2, $parent_id);
	$stmt -> bindParam(3, $child_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function delete_sharing_doctor($sharing_doctor){
	try{
	$sharing_doctor_id = $sharing_doctor->get_sharing_doctor_id();
	$doctor_id = $sharing_doctor->get_doctor_id();
	$parent_id = $sharing_doctor->get_parent_id();
	$child_id = $sharing_doctor->get_child_id();
	include 'config/dbconfig.php';
	$stmt = $db->prepare("DELETE FROM sharing_doctor WHERE sharing_doctor_id=?");
	$stmt -> bindParam(1, $sharing_doctor_id);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

function add_image($userid, $new_filename)
{
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("INSERT INTO post_image (post_id, filename) VALUES (?,?)");
	$stmt -> bindParam(1,$userid);
	$stmt -> bindParam(2,$new_filepath);
	$stmt -> execute();
	return true;
	} catch(PDOException $ex){
		echo 'error!';
		return false;
	}
	return false;
}

//retrieve information code

function retrieve_parent_by_search($key){
	try{
	include 'config/dbconfig.php';
	$temp = '%' . $key . '%';
	$stmt = $db->prepare("SELECT * FROM parent WHERE (parent.first_name LIKE ? OR parent.last_name LIKE ?)");
	$stmt->bindParam(1,$temp);
	$stmt->bindParam(2,$temp);
	$stmt->execute();
	$parent = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $parent;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_parent($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM parent WHERE parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$parent = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $parent;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_child_by_search($key){
	try{
	include 'config/dbconfig.php';	
	$temp = '%' . $key . '%';
	$stmt = $db->prepare("SELECT * FROM child WHERE (first_name LIKE ? OR last_name LIKE ?)");
	$stmt->bindParam(1,$temp);
	$stmt->bindParam(2,$temp);
	$stmt->execute();
	$child = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $child;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_child($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM child WHERE child_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$child = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $child;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_child_by_family($parent_family_id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM child WHERE family_id=?");
	$stmt->bindParam(1,$parent_family_id);
	$stmt->execute();
	$child = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $child;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_doctor($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM doctor WHERE doctor_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$doctor = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $doctor;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_doctor_by_search($key){
	try{
	include 'config/dbconfig.php';
	$temp = '%' . $key . '%';
	$stmt = $db->prepare("SELECT * FROM doctor, parent WHERE (parent.first_name LIKE ? OR parent.last_name LIKE ?) AND parent.parent_id = doctor.parent_id");
	$stmt->bindParam(1,$temp);
	$stmt->bindParam(2,$temp);
	$stmt->execute();
	$doctor = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $doctor;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_post($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM post WHERE to_parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$posts = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $posts;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_post_by_child($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM post WHERE child_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$posts = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $posts;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_post_by_parent($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM post WHERE to_parent_id=? && from_parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->bindParam(2,$id);
	$stmt->execute();
	$posts = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $posts;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_post_of_parent_by_child($parent_id, $child_id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM post WHERE child_id=? && (to_parent_id = ? && from_parent_id=?)");
	$stmt->bindParam(1,$child_id);
	$stmt->bindParam(2,$parent_id);
	$stmt->bindParam(3,$parent_id);
	$stmt->execute();
	$posts = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $posts;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_comment_by_post($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM comment WHERE post_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$comments = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $comments;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_items($category, $key){
	try{
	include 'config/dbconfig.php';
	$temp = '%' . $key . '%';
	$stmt = $db->prepare("SELECT * FROM category_reference WHERE name LIKE ? && category_name =?");
	$stmt->bindParam(1,$temp);
	$stmt->bindParam(2,$category);
	$stmt->execute();
	$items	= $stmt->fetchAll(PDO::FETCH_OBJ);
	return $items;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_shared_by_parent_accounts($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM sharing WHERE from_parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$parents = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $parents;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_shared_by_parent_accounts($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM sharing WHERE to_parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$parents = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $parents;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_shared_to_doctor_accounts($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM sharing_doctor WHERE doctor_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$children = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $children;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_parent_medical_history($id){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM medical_history WHERE parent_id=?");
	$stmt->bindParam(1,$id);
	$stmt->execute();
	$children = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $children;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_all_tags(){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT * FROM Tags");
	$stmt->execute();
	$tags = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $tags;
	} catch(PDOException $ex){
		echo 'error!';
	}
}

function retrieve_category_from_tag($tag){
	try{
	include 'config/dbconfig.php';
	$stmt = $db->prepare("SELECT tag_category FROM Tags where tag_name=?");
	$stmt->bindParam(1,$tag);
	$stmt->execute();
	$category = $stmt->fetch();
	if(isset($category['tag_category']))
	return $category['tag_category'];
	else return null;
	} catch(PDOException $ex){
		echo 'error!';
	}
}


//regex code

function retrieve_tags($string){
	$chars = preg_split("/ /", $string);

	preg_match_all("/#[A-Za-z0-9][A-Za-z0-9_]*|@[A-Za-z0-9][A-Za-z0-9_]*/", $string, $matches);
	

	return $matches[0];
}

?>