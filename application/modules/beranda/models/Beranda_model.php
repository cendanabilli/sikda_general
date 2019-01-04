<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		// $id_user_level = $this->session->userdata('id_user_level');
		// $id_cabang     = $this->session->userdata('id_cabang');
		// $id_users      = $this->session->userdata('id_users');
		// $this->sess    = (object) compact('id_user_level', 'id_cabang', 'id_users');
	}

	// public function get_total_antrian_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT 
	// 		COUNT(*) AS total 
	// 	FROM 
	// 		log_tqueue 
	// 	WHERE 
	// 		waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') " . 
	// 		$where;
		
	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_total_dilayani_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT 
	// 		COUNT(*) AS total
	// 	FROM 
	// 		log_tqueue 
	// 	WHERE 
	// 		waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') 
	// 		AND `status` = 7 " .
	// 		$where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_total_dibatalkan_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT 
	// 		COUNT(*) AS total 
	// 	FROM 
	// 		log_tqueue 
	// 	WHERE 
	// 		waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') AND ((`status` = 3) OR (`status` = 5)) " .
	// 		$where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_total_dipending_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT 
	// 		COUNT(*) AS total 
	// 	FROM 
	// 		log_tqueue 
	// 	WHERE 
	// 		waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59')
	// 		AND `status` = 2 " . 
	// 		$where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_jml_layanan()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "WHERE id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "WHERE id_cabang = '" . $this->sess->id_cabang . "'";
	// 	}

	// 	$sql_query = "SELECT COUNT(*) jml FROM tset_layanan " . $where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_jml_loket()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "WHERE id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "WHERE id_cabang = '" . $this->sess->id_cabang . "'";
	// 	}
		
	// 	$sql_query = "SELECT COUNT(*) jml FROM tset_loket " . $where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_rata2_waktu_tunggu_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		COALESCE(
	// 			TIME_FORMAT(
	// 				SEC_TO_TIME(
	// 					(
	// 						SUM(TIMESTAMPDIFF(SECOND, a.waktu_ambil_tiket, a.waktu_dipanggil))/COUNT(*)
	// 					)
	// 				), '%H:%i:%s'
	// 			), '00:00:00'
	// 		) AS formatted_date
	// 	FROM
	// 		log_tqueue a
	// 	WHERE
	// 		a.waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59')
	// 		AND `status` = 7 " .
	// 		$where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_rata2_waktu_pelayanan_now()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		COALESCE(
	// 			TIME_FORMAT(
	// 				SEC_TO_TIME(
	// 					(
	// 						SUM(TIMESTAMPDIFF(SECOND, a.waktu_dilayani, a.waktu_selesai))/COUNT(*)
	// 					)
	// 				), '%H:%i:%s'
	// 			), '00:00:00'
	// 		) formatted_date
	// 	FROM
	// 		log_tqueue a
	// 	WHERE
	// 		a.waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59')
	// 		AND `status` = 7 " .
	// 		$where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function dashboard_grafik_per_hari_10terakhir()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		DATE_FORMAT(a.waktu_ambil_tiket, '%d-%m-%Y') AS tanggal,
	// 		COUNT(*) AS tiket_diambil,
	// 		SUM(CASE
	// 				WHEN a.`status` = 7 THEN 1
	// 				ELSE 0
	// 			END) AS berhasil_dilayani
	// 	FROM
	// 		log_tqueue a
	// 	WHERE
	// 		a.waktu_ambil_tiket BETWEEN CONCAT(SUBDATE(CURRENT_DATE, INTERVAL 9 DAY),' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') " .
	// 		$where . "
	// 	GROUP BY
	// 		tanggal";

	// 	$data = $this->db->query($sql_query);
	// 	return $data->result();
	// }

	// public function dashboard_grafik_per_jam()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		b.jam,
	// 		COALESCE(c.total, 0) AS total_ambil_tiket,
	// 		COALESCE(c.total1, 0) AS total_dilayani
	// 	FROM(
	// 		SELECT
	// 			num AS jam
	// 		FROM
	// 			(
	// 				SELECT
	// 					RIGHT (concat('0', (t * 10 + u)), 2) num
	// 				FROM (
	// 					SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9
	// 				) N1,
	// 				(
	// 					SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9
	// 				) N2
	// 				ORDER BY
	// 					num
	// 			) nums
	// 		WHERE
	// 			num < 24
	// 	) b
	// 	LEFT JOIN (
	// 		SELECT
	// 			CONCAT(DATE_FORMAT(a.waktu_ambil_tiket, '%H')) AS jam,
	// 			SUM(CASE
	// 					WHEN a.`status` = 4 THEN 1
	// 					ELSE 0
	// 				END) AS total,
	// 			SUM(CASE
	// 					WHEN a.`status` = 7 THEN 1
	// 					ELSE 0
	// 				END) AS total1
	// 		FROM
	// 			log_tqueue a
	// 		WHERE
	// 			a.waktu_ambil_tiket BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') " .
	// 			$where . "
	// 		GROUP BY
	// 			jam
	// 	) AS c
	// 		ON b.jam = c.jam
	// 	ORDER BY
	// 		b.jam";
		
	// 	$data = $this->db->query($sql_query);
	// 	return $data->result();
	// }

	// public function get_total_mesin_skp()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "WHERE id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "WHERE id_cabang = '" . $this->sess->id_cabang . "'";
	// 	}

	// 	$sql_query = "SELECT COUNT(*) AS total FROM kpspelanggan_mesin " . $where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_total_responden_skp()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "AND id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "AND id_cabang = '" . $this->sess->id_cabang . "' AND user_id = '" . $this->sess->id_users . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		COUNT(*) AS total
	// 	FROM (
	// 		SELECT
	// 			a.responden
	// 		FROM
	// 			kpspelanggan_log a
	// 		WHERE
	// 			a.log_date BETWEEN CONCAT(CURRENT_DATE, ' 00:00:00') AND CONCAT(CURRENT_DATE, ' 23:59:59') " .
	// 			$where ."
	// 		GROUP BY a.responden
	// 	) b";

	// 	$data = $this->db->query($sql_query);
	// 	return $data->row();
	// }

	// public function get_report_data_table()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "WHERE id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "WHERE id_cabang = '" . $this->sess->id_cabang . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		g.id_pertanyaan,
	// 		g.isi_pertanyaan,
	// 		g.isi_pertanyaan_en,
	// 		g.id_status,
	// 		g.nama_status,
	// 		g.color,
	// 		COALESCE(jml, 0) AS jml,
	// 		g.id_cabang
	// 	FROM (
	// 		SELECT
	// 			a.id_pertanyaan,
	// 			a.isi_pertanyaan,
	// 			a.isi_pertanyaan_en,
	// 			b.id_status,
	// 			b.nama_status,
	// 			b.nilai,
	// 			b.color,
	// 			a.id_cabang
	// 		FROM
	// 			kpspelanggan_pertanyaan a
	// 		LEFT JOIN
	// 			kpspelanggan_status_multi b
	// 			ON a.id_pertanyaan_alias = b.id_pertanyaan
	// 			AND a.is_global = b.is_global
	// 			AND a.id_cabang = b.id_cabang
	// 		GROUP BY
	// 			a.id_pertanyaan,
	// 			b.id_status,
	// 			b.nama_status,
	// 			b.nilai,
	// 			b.color
	// 	) g
	// 	LEFT JOIN (
	// 		SELECT
	// 			b.id_pertanyaan,
	// 			b.isi_pertanyaan,
	// 			a.id_status,
	// 			a.jml,
	// 			b.id_cabang
	// 		FROM
	// 			kpspelanggan_pertanyaan b
	// 		LEFT JOIN (
	// 			SELECT
	// 				c.id_pertanyaan,
	// 				c.id_status,
	// 				COUNT(*) AS jml,
	// 				c.id_cabang					
	// 			FROM
	// 				kpspelanggan_log c
	// 			LEFT JOIN (
	// 				SELECT
	// 					a.id_pertanyaan,
	// 					b.id_status,
	// 					b.nama_status,
	// 					b.nilai,
	// 					b.color,
	// 					a.id_cabang
	// 				FROM
	// 					kpspelanggan_pertanyaan a
	// 				LEFT JOIN
	// 					kpspelanggan_status_multi b
	// 					ON a.id_pertanyaan_alias = b.id_pertanyaan
	// 					AND a.is_global = b.is_global 
	// 					AND a.id_cabang=b.id_cabang
	// 				GROUP BY
	// 					a.id_pertanyaan,
	// 					b.id_status,
	// 					b.nama_status,
	// 					b.nilai,
	// 					b.color,
	// 					a.id_cabang
	// 			) a
	// 				ON c.id_pertanyaan = a.id_pertanyaan
	// 				AND c.id_status = a.id_status
	// 				AND c.id_cabang = a.id_cabang
	// 			WHERE
	// 				c.log_date BETWEEN CONCAT(CURRENT_DATE,' 00:00:00') AND CONCAT(CURRENT_DATE,' 23:59:59')
	// 			GROUP BY
	// 				c.id_pertanyaan,
	// 				c.id_status,
	// 				c.id_cabang					
	// 		) a
	// 			ON a.id_pertanyaan = b.id_pertanyaan
	// 			AND a.id_cabang = b.id_cabang
	// 	) h
	// 		ON g.id_pertanyaan = h.id_pertanyaan
	// 		AND g.id_status = h.id_status
	// 		AND g.id_cabang = h.id_cabang
	// 	WHERE
	// 		g.id_pertanyaan IN (
	// 			SELECT 
	// 				id_pertanyaan 
	// 			FROM 
	// 				kpspelanggan_pertanyaan 
	// 			" . $where . "
	// 		)
	// 	ORDER BY 
	// 		g.id_pertanyaan, 
	// 		g.id_status";

	// 	$data = $this->db->query($sql_query);
	// 	return $data->result();
	// }

	// public function get_pertanyaan()
	// {
	// 	if ($this->sess->id_user_level == 1) {
	// 		$where = $this->sess->id_cabang ? "WHERE id_cabang = '" . $this->sess->id_cabang . "'" : "";
	// 	} else {
	// 		$where = "WHERE id_cabang = '" . $this->sess->id_cabang . "'";
	// 	}

	// 	$sql_query = "SELECT
	// 		*
	// 	FROM 
	// 		kpspelanggan_pertanyaan 
	// 	" . $where;

	// 	$data = $this->db->query($sql_query);
	// 	return $data->result();
	// }
}
