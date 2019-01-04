

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<!-- m-subheader__title m-subheader__title--separator -->
								<h3 class="">Pendaftaran Baru</h3>
								<!-- <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a class="m-nav__link m-nav__link--icon" href="#">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a class="m-nav__link" href="">
											<span class="m-nav__link-text">Forms &amp; Controls</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a class="m-nav__link" href="">
											<span class="m-nav__link-text">Form Layouts</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a class="m-nav__link" href="">
											<span class="m-nav__link-text">Sticky Action Bar</span>
										</a>
									</li>
								</ul> -->
							</div>
							<div>
								<div aria-expanded="true" m-dropdown-toggle="hover" class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push">
									<a class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" href="#">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a class="m-nav__link" href="">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a class="m-nav__link" href="">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a class="m-nav__link" href="">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a class="m-nav__link" href="">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm" href="#">Submit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">

								<!--begin::Portlet-->
								<div id="main_portlet" class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile m-portlet--sticky">
									<form action="<?php echo base_url() ?>transaksi/pendaftaran/process-add" method="POST">
									<div class="m-portlet__head" style="z-index: 90; top: 70px; right: 30px;">
										<div class="m-portlet__head-progress">

											<!-- here can place a progress bar-->
										</div>
										<div class="m-portlet__head-wrapper">
											<!-- <div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text">
														Sticky Action Bar
													</h3>
												</div>
											</div> -->
											<div class="m-portlet__head-tools">
												<a class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10" href="<?php echo base_url() ?>transaksi/pendaftaran.html">
													<span>
														<i class="la la-arrow-left"></i>
														<span>Kembali</span>
													</span>
												</a>
												<button class="btn btn-accent m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10" type="submit">
													<span>
														<i class="la la-puzzle-piece"></i>
														<span>Simpan</span>
													</span>
												</button>
											<!-- 	<div class="btn-group">
													<button class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md" type="button">
														<span>
															<i class="la la-check"></i>
															<span>Save</span>
														</span>
													</button>
													<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-accent  dropdown-toggle dropdown-toggle-split m-btn m-btn--md" type="button">
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="la la-plus"></i> Save &amp; New</a>
														<a href="#" class="dropdown-item"><i class="la la-copy"></i> Save &amp; Duplicate</a>
														<a href="#" class="dropdown-item"><i class="la la-undo"></i> Save &amp; Close</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="la la-close"></i> Cancel</a>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										
									

										<div id="m_form" class="m-form m-form--label-align-left- m-form--state-">

											<!--begin: Form Body -->
											<div class="m-portlet__body">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Form Pendaftaran Pasien</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Rekam Medis</label>
																<div class="col-lg-4">
																	<!-- <label></label> -->
																	<input type="text" name="rekam_medis" placeholder="Otomatis" class="form-control m-input">
																	<span class="m-form__help"></span>
																</div>
																<div class="col-lg-4">
																	<!-- <label class=""></label> -->
																	<input type="text" name="cm_lama" class="form-control m-input" placeholder="CM lama (Bila Ada)">
																	<span class="m-form__help"></span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">NIK</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="nik">
																	<!-- <span class="m-form__help">Please enter your first and last names</span> -->
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
																<div class="col-lg-3">
																	<!-- <label></label> -->
																	<input type="text" name="nama_lengkap" placeholder="" class="form-control m-input">
																	<span class="m-form__help"></span>
																</div>
																<label class="col-xl-3 col-lg-3 col-form-label">Tanggal Daftar* (dd/mm/yyyy)</label>
																<div class="col-lg-3">
																	<!-- <label class=""></label> -->
																	<!-- <input type="text" name="tanggal_daftar" class="form-control m-input" placeholder=""> -->
																	<div class="input-group date">
																		<input type="text" class="form-control m-input datepicker" readonly placeholder="Select date"  />
																		<div class="input-group-append">
																			<span class="input-group-text">
																				<i class="la la-calendar-check-o"></i>
																			</span>
																		</div>
																	</div>

																	<span class="m-form__help"></span>
																</div>
																<script>
																	$('.datepicker').datepicker({
																		format: 'mm/dd/yyyy'
																	});
																</script>
															</div>

															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="tempat_lahir">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir:</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="tanggal_lahir">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-lg-12 m-form__group-sub">
																	<label class="form-control-label">Jenis Kelamin:</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="L"  name="jenis_kelamin" checked> Laki-laki
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="P" name="jenis_kelamin"> Perempuan
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="TB" name="jenis_kelamin"> Tidak Berlaku
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="TD" name="jenis_kelamin"> Tidak Diketahui
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="TK" name="jenis_kelamin"> Tidak Dikategori
																			<span></span>
																		</label>
																	</div>
																	<!-- <span class="m-form__help">Please select user group</span> -->
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Kel/Jenis Pasien:</label>
																<div class="col-xl-5 col-lg-9">
																	<select class="form-control m-input" name="jenis_pasien">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																		<option  value="0000000005">JAMKESDA</option>
																		<option  value="0000000006">JKN BPJS</option>
																	</select>
																</div>
															<div class="col-lg-4 m-form__group-sub">
																	<label class="form-control-label">Cara Bayar:</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="GR" name="cara_bayar"> Gratis
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="TU" name="cara_bayar"> Tunai
																			<span></span>
																		</label>
																	</div>
																	<!-- <span class="m-form__help">Please select user group</span> -->
																</div>
															</div>
															<!-- <div class="form-group m-form__group row">
																
															</div> -->
														
														<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Nama KK:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="nama_kk">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
																<label class="col-xl-3 col-lg-3 col-form-label">No KK:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="no_kk">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
														</div>

														<!-- <div class="form-group m-form__group row">
																
														</div> -->

														<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">Ket Wilayah:</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="DW" name="wilayah"> Dalam Wilayah
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="LW" name="wilayah"> Luar Wiayah
																			<span></span>
																		</label>
																	</div>
																	<!-- <span class="m-form__help">Please select user group</span> -->
																</div>
															</div>

															<!-- <div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">* Phone</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
																		<input type="text" value="1-541-754-3010" placeholder="" class="form-control m-input" name="phone">
																	</div>
																	<span class="m-form__help">Enter your valid phone in US phone format. E.g: 1-541-754-3010</span>
																</div>
															</div> -->
														</div>
														
														<div class="m-separator m-separator--dashed m-separator--lg"></div>

														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Alamat
																	<!-- <i title="" class="m-form__heading-help-icon flaticon-info" data-width="auto" data-toggle="m-tooltip" data-original-title="Some help text goes here"></i> -->
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Alamat:</label>
																<div class="col-xl-9 col-lg-9">
																	<textarea placeholder="" class="form-control m-input" name="alamat"></textarea>
																	<!-- <span class="m-form__help">Street address, P.O. box, company name, c/o</span> -->
																</div>
															</div>
														
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Provinsi:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="provinsi">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Kab/Kota:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="kab_kota">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Kecamatan:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="kecamatan">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Desa/Kelurahan:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="desa_kelurahan">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Kode Pos:</label>
																<div class="col-xl-9 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="kode_pos">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>

															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Nomor Tlp:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="no_tlp">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>

																<label class="col-xl-3 col-lg-3 col-form-label">Nomor Hp:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="no_hp">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>

															<!-- <div class="form-group m-form__group row">
																
															</div> -->

														</div>

														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Data Pribadi</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Agama:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="agama">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Gol Darah:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="agama">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Pendidikan Akhir:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="pendidikan_akhir">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="pekerjaan">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Ras/Suku:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="ras_suku">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">Status Nikah:</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="1" checked="" name="status_nikah"> Menikah
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="2" name="status_nikah"> Belum Menikah
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="3" name="status_nikah"> Janda
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" value="4" name="status_nikah"> Duda
																			<span></span>
																		</label>
																	</div>
																	<!-- <span class="m-form__help">Please select user group</span> -->
																</div>
															</div>

														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Keluarga</h3>
															</div>
															
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Nama Ayah:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="nama_ayah">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
																<label class="col-xl-3 col-lg-3 col-form-label">Nama Ibu:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="nama_ibu">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>
<!-- 
															<div class="form-group m-form__group row">
																
															</div> -->

															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Orang Yang Dapat Dihubungi:</label>
																<div class="col-xl-3 col-lg-3">
																	<input type="text" value="" placeholder="" class="form-control m-input" name="pic">
																	<!-- <span class="m-form__help">We'll never share your email with anyone else</span> -->
																</div>
															</div>
														</div>

														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">Daftarkan Ke Kunjungan</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">Jenis Kunjungan:</label>
																<div class="col-xl-9 col-lg-9">
																	<select class="form-control m-input" name="ras_suku">
																		<option selected="" value=""> - Silahkan Pilih - </option>
																		<option  value="0000000001">UMUM</option>
																	</select>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
								</div>

								<!--end::Portlet-->
							</div>
						</div>
					</div>
