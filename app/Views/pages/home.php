  <main class="container">
      <hgroup>
          <h1>Hi! This is my first CodeIgniter Application.</h1>
          <p>Alman Farroz</p>
          <nav>
              <ul>
                  <li>
                      <a href="<?= base_url(['list']) ?>" role="button">List Mahasiswa</a>
                  </li>
                  <li>
                      <a href="<?= base_url(['list', 'create']) ?>" role="button" class="contrast">Tambah Mahasiswa</a>
                  </li>
              </ul>
          </nav>
      </hgroup>
  </main>