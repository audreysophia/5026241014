<html>
<head>
  <title>Pilih Paket Layanan Musik Anda</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet" />

  <style>
    body {
      background-color: #f0f0f0;
    }

    .header h1 {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      letter-spacing: 4px;
      color: #333;
      text-transform: uppercase;
    }

    .header {
      text-align: center;
      padding-top: 3rem;
      padding-bottom: 1.5rem;
    }

    .header p {
      color: #6c757d;
      margin-top: 0.5rem;
      font-size: 14px;
    }

    .container {
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding-bottom: 3rem;
    }

    .cards {
      display: flex;
      gap: 24px;
    }

    .card {
      flex: 1;
      height: 100%;
      background-color: #fff;
      border: 2px solid #ddd;
      border-radius: 0;
    }

    .card-body {
      padding: 3rem 1.2rem;
      text-align: center;
    }

    .plan-name {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 20px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #333;
      margin-bottom: 0.25rem;
    }

    .plan-price {
      color: #6c757d;
      font-size: 14px;
      margin-bottom: 1.5rem;
    }

    .button {
      display: block;
      width: 100%;
      padding: 12px 0;
      font-family: sans-serif;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      border: none;
      cursor: pointer;
      margin-bottom: 1.5rem;
      border-radius: 0;
    }

    .button-current {
      background-color: #aaa;
      color: #fff;
      cursor: default;
    }

    .button-upgrade {
      background-color: #e05555;
      color: #fff;
    }

    .feature-item {
      font-size: 13px;
      color: #555;
      margin-bottom: 0.5rem;
    }

    .feature-item-last {
      margin-bottom: 0;
    }

    .feature-bold {
      color: #333;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="header">
    <h1>Pilih Paket Layanan Musik Anda</h1>
    <p>Pilih salah satu dari tiga paket di bawah ini yang sesuai dengan kebutuhan anda</p>
  </div>

  <div class="container">
    <div class="cards">

      <div class="card">
        <div class="card-body">
          <p class="plan-name">Paket Single</p>
          <p class="plan-price">Rp49.999,00/Bulan</p>
          <button class="button button-current" disabled>Your Plan</button>
          <p class="feature-item"><span class="feature-bold">Free</span> 1 akun pengguna</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> streaming lagu</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> playlist mixes</p>
          <p class="feature-item"><span class="feature-bold">2</span> perangkat yang terhubung</p>
          <p class="feature-item feature-item-last"><span class="feature-bold">10</span> lagu yang bisa diunduh GRATIS</p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <p class="plan-name">Paket Couple</p>
          <p class="plan-price">Rp89.999,00/Bulan</p>
          <button class="button button-upgrade">Upgrade</button>
          <p class="feature-item"><span class="feature-bold">Free</span> 2 akun pengguna</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> streaming lagu</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> playlist mixes</p>
          <p class="feature-item"><span class="feature-bold">4</span> perangkat yang terhubung</p>
          <p class="feature-item feature-item-last"><span class="feature-bold">20</span> lagu yang bisa diunduh GRATIS</p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <p class="plan-name">Paket Family</p>
          <p class="plan-price">Rp199.000,00/Bulan</p>
          <button class="button button-upgrade">Upgrade</button>
          <p class="feature-item"><span class="feature-bold">Free</span> 5 akun pengguna</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> streaming lagu</p>
          <p class="feature-item"><span class="feature-bold">Unlimited</span> playlist mixes</p>
          <p class="feature-item"><span class="feature-bold">10</span> perangkat yang terhubung</p>
          <p class="feature-item feature-item-last"><span class="feature-bold">40</span> lagu yang bisa diunduh GRATIS</p>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
