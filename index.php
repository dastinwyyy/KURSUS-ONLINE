<?php include_once("inc_header.php")?>
      <!-- untuk home -->
      <section id="home">
        <img src="https://img.freepik.com/free-vector/programming-concept-illustration_114360-1351.jpg?uid=R156205527&ga=GA1.1.1023892941.1720583859&semt=sph"/> 
        <div class="kolom">
          <p class="deskripsi"><?php echo ambil_kutipan('15')?></p>
          <h2><?php echo ambil_judul('15')?></h2>
          <?php echo maximum_kata(ambil_isi('15'),20)?>
          <p><a href="<?php echo buat_link_halaman('15')?>"class="tbl-hijau">Selengkapnya</a></p>
        </div>
      </section>

      <!-- untuk courses -->
      <section id="courses">
        <div class="kolom">
          <p class="deskripsi"><?php echo ambil_kutipan('16')?></p>
          <h2><?php echo ambil_judul('16')?></h2>
          <?php echo maximum_kata(ambil_isi('16'),20)?>
          <p><a href="<?php echo buat_link_halaman('16')?>" class="tbl-biru">Selengkapnya</a></p>
        </div> 
        <img src="https://img.freepik.com/free-vector/illustrated-woman-being-intern-company_23-2148726151.jpg?ga=GA1.1.1023892941.1720583859&semt=sph"/>
      </section>

      <!-- untuk tutors -->
       <section id="tutors">
        <div class="tengah">
          <div class="kolom">
            <p class="deskripsi">Our Best Tutors is Only At MY HOME.</p>
            <h2>Tutors</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, ad!</p>
          </div>

          <div class="tutor-list">
            <?php 
            $sql1   = "select * from tutors order by nama asc";
            $q1     = mysqli_query($koneksi,$sql1);
            while($r1 = mysqli_fetch_array($q1)){
              ?>
              <div class="kartu-tutor">
              <a href="<?php echo buat_link_tutors($r1['id'])?>">
              <img src="<?php echo url_dasar()."/gambar/".tutors_foto($r1['id'])?>"/>
              <p><?php echo $r1['nama']?></p>
              </a>
            </div>
              <?php 
            }
            ?>
            
            
          </div>
        </div>
       </section>

       <!-- untuk fatners -->
        <section id="Partners">
          <div class="tengah">
            <div class="kolom">
              <p class="deskripsi">Our Top Partners</p>
              <h2>Partners</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur sint voluptatibus aut! Quia laborum velit, exercitationem dolore fugiat corporis maxime.</p>
            </div>

            <div class="partner-list">
              <?php 
              $sql1   = "select * from partners order by id asc";
              $q1     = mysqli_query($koneksi,$sql1);
              while($r1 = mysqli_fetch_assoc($q1)){
                ?>
                <div class="kartu-partner">
                  <a href="<?php echo buat_link_partners($r1['id'])?>">
                  <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                  </a>
                </div>
                <?php
              }
              ?>
            </div>
          </div>
        </section>
<?php include_once("inc_footer.php")?>
     
