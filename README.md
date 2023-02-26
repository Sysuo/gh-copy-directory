# gh-copy-directory
Github Action でディレクトリをコピーしてコミット・プッシュ・プルリク作成・マージまでするのをテストするためのリポジトリ

# やりたいこと

- template フォルダをコピーして、city-id (引数)にリネーム
- php の一部を都道府県、市区町村、サービス名に置き換え
- シークレットキー、DBパスワードをランダムで付与
- commit
- push
- Pull Request 作成
- merge

# 参考

## Github Action
- [Github Action ワークフローをトリガーするイベント](https://docs.github.com/ja/actions/using-workflows/events-that-trigger-workflows)
- [curl を使って Github Action を外部から実行する](https://scrapbox.io/nwtgck/GitHub_Actions%E3%82%92curl%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E5%A4%96%E9%83%A8%E3%81%8B%E3%82%89%E5%AE%9F%E8%A1%8C%E3%81%99%E3%82%8B)
- [Github Action をローカルで実行する](https://kakakakakku.hatenablog.com/entry/2023/02/02/111644)
- [Variables \- GitHub Docs](https://docs.github.com/ja/actions/learn-github-actions/variables)
- [actions/checkout: Action for checking out a repo](https://github.com/actions/checkout)
- [Create Branch · Actions · GitHub Marketplace](https://github.com/marketplace/actions/create-branch)

# 環境設定
![スクリーンショット 2023-02-27 0 26 15](https://user-images.githubusercontent.com/3732626/221420031-c1bf019a-d3be-4e46-9b63-7a6479d6ecf3.png)
![スクリーンショット 2023-02-27 1 10 27](https://user-images.githubusercontent.com/3732626/221422227-4d4dd635-d0a8-4a7c-8329-83b6e7d610ab.png)

## 文字列操作
- [ランダムな文字列を生成](https://www.rasukarusan.com/entry/2019/03/29/224418)
- [sed コマンド](https://hydrocul.github.io/wiki/commands/sed.html)
- [【Linux】シェルスクリプトによる文字列処理：置換や削除をする方法](https://eng-entrance.com/linux-shellscript-replacement)
- [【初心者〜中級者向け】シェルスクリプトの変数の使い方まとめ](https://eng-entrance.com/linux-shellscript-variable)
