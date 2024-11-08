# Aşısayfası Projesi

Bu proje, evde aşı hizmeti sunan bir platformun temel yapısını oluşturmayı amaçlamaktadır. Kullanıcıların evde aşı randevusu alabilmesi ve sağlık profesyonellerinin bu randevuları yönetebilmesi için bir arayüz sağlar.

## İçindekiler
- [Özellikler](#özellikler)
- [Kullanılan Teknolojiler](#kullanılan-teknolojiler)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Katkı](#katkı)
- [Lisans](#lisans)

## Özellikler
- **Kullanıcı Kaydı ve Girişi**: Kullanıcıların hesap oluşturması ve giriş yapabilmesi.
- **Randevu Sistemi**: Evde aşı randevusu alma ve yönetme.
- **Sağlık Profesyonelleri Yönetimi**: Sağlık çalışanlarının randevuları görüntülemesi ve yönetmesi.
- **Bildirimler**: Randevu hatırlatmaları ve güncellemeler için bildirimler.

## Kullanılan Teknolojiler
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: Node.js, Express.js
- **Veritabanı**: MongoDB
- **Diğer**: Bootstrap, jQuery

## Kurulum
1. **Depoyu Klonlayın**:
    ```bash
    git clone https://github.com/Dogukanmukan/vaccination-at-home-.git
    ```
2. **Backend Kurulumu**:
    - `backend` dizinine gidin:
      ```bash
      cd vaccination-at-home-/backend
      ```
    - Gerekli paketleri yükleyin:
      ```bash
      npm install
      ```
    - Sunucuyu başlatın:
      ```bash
      npm start
      ```
3. **Frontend Kurulumu**:
    - `frontend` dizinine gidin:
      ```bash
      cd ../frontend
      ```
    - Gerekli paketleri yükleyin:
      ```bash
      npm install
      ```
    - Uygulamayı çalıştırın:
      ```bash
      npm start
      ```

## Kullanım
- Uygulamayı çalıştırdıktan sonra tarayıcınız üzerinden `http://localhost:3000` adresine giderek platformu görüntüleyebilirsiniz.
- Kullanıcılar hesap oluşturabilir, giriş yapabilir ve evde aşı randevusu alabilir.
- Sağlık profesyonelleri, giriş yaparak randevuları görüntüleyebilir ve yönetebilir.

## Katkı
1. Projeyi forkladıktan sonra geliştirmelerinizi kendi branch'inizde yapabilirsiniz.
2. Değişikliklerinizi commit edin ve GitHub’a push yapın.
3. Bir `pull request` oluşturarak önerilerinizi paylaşabilirsiniz.

## Lisans
Bu proje MIT Lisansı ile lisanslanmıştır. Ayrıntılar için `LICENSE` dosyasına bakabilirsiniz.
