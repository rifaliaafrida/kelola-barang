class Sidebar extends HTMLElement {
    connectedCallback() {
        this.render();
    }

    render() {
      this.innerHTML = `
      <header>
        <nav>
          <div class="sidebar-brand">
            <img src="./img/logo.svg" alt="" />
            <h2>Kelola Barang</h2>
          </div>
          <div class="sidebar-items">
            <ul>
              <li>
                <a href="./input.php"><img src="./img/inputdata.svg" alt="" />Input Data</a>
              </li>
              <li>
                <a href="./laporan.php"><img src="./img/laporan.svg" alt="" />Laporan</a>
              </li>
              <li>
                <a href="#"><img src="./img/logout.svg" alt="" />Logout</a>
              </li>
            </ul>
           </div>
        </nav>
      </header>
      `;
    } 
}

customElements.define('sidebar-header', Sidebar)

   