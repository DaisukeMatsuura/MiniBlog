## MiniBlog Application

### オリジナルフレームワークを使っての開発手順

- Applicationクラス
  - ルートディレクトリの指定
  - アクションにあわせたルーティング定義
  - 接続するデータベースの指定（DbManagerクラスを操作）
  - ログインアクションの指定
- index.php
  - Applicationの呼び出しと実行
- Controllerクラス __（C:コントローラ）__
  - 役割にあわせて子クラスの作成
  - 作成する画面にあわせたアクション定義、処理の実装
  - ログインが必要なアクションの指定
- DbRepositoryクラス __（M:モデル）__
  - データベース上のテーブルごとに子クラスの作成
  - データベースアクセス処理の実装
- ビューファイル __(V:ビュー)__
  - アクションにあわせたHTMLの記述
  - レイアウトファイルの記述
  
  ## 最終的な完成したMiniBlogアプリケーション
  
  作成したファイルは以下のようになっています。※順番はアルファベット順
  
  ```
  application/
      bootstrap.php
      controllers/
          AccountController.php    *追加
          StatusController.php     *追加 
      core/
          Application.php
          ClassLoader.php
          Controller.php
          DbManager.php
          DbRepository.php
          HttpNotFoundException.php
          Request.php
          Response.php
          Router.php
          Session.php
          UnauthorizedActionException.php
          View.php
      models/
          FollowingRepository.php  *追加
          StatusRepository.php     *追加
          UserRepository.php       *追加
      views/
          account/                 *追加
              index.php            *追加
              inputs.php           *追加
              signin.php           *追加
              signup.php           *追加
          status/                  *追加
              index.php            *追加
              show.php             *追加
              status.php           *追加
              user.php             *追加
          errors.php               *追加
          layout.php               *追加
      web/
          css/
              style.css            *追加
          .htaccess
          index.php
      MiniBlogApplication.php      *追加
  ```