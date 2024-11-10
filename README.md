# 筋力トレーニング記録アプリ 設計書

## プロジェクト概要

**目標**

- ユーザーが目標を設定し、日々の筋力トレーニングと体重を記録して、進捗状況を視覚化し、モチベーションを維持できるアプリを開発。
- **Web 版**を先行して開発し、機能が安定したら**React Native を用いてモバイル版を展開**。

**主な特徴**

1. ユーザー情報と目標の記録
2. トレーニング記録および体重管理
3. 進捗状況の可視化（進捗バー、カレンダー形式）
4. 通知機能（週次・月次の進捗報告）

---

## データベース設計

### テーブル構成

1. **Users**（ユーザー情報）

   - `id` : 主キー
   - `name` : 名前
   - `age` : 年齢
   - `height` : 身長
   - `weight` : 体重（初期体重、現在の体重）
   - `email` : メールアドレス

2. **Goals**（目標値）

   - `id` : 主キー
   - `user_id` : `Users`テーブルと紐づける外部キー
   - `target_weight` : 目標体重
   - `target_body_fat` : 目標体脂肪率
   - `target_training_weight` : トレーニング目標重量

3. **WorkoutMaster**（トレーニングマスター）

   - `id` : 主キー
   - `part` : トレーニング部位（例：胸、脚、背中）
   - `exercise` : トレーニング内容（例：ベンチプレス、スクワット）

4. **WorkoutRecords**（トレーニング記録）

   - `id` : 主キー
   - `user_id` : `Users`テーブルと紐づける外部キー
   - `date` : トレーニング日
   - `exercise_id` : `WorkoutMaster`テーブルと紐づける外部キー
   - `sets` : セット数
   - `reps` : レップ数
   - `weight` : 使用重量

5. **DailyRecords**（日々の記録）
   - `id` : 主キー
   - `user_id` : `Users`テーブルと紐づける外部キー
   - `date` : 記録日
   - `weight` : 当日の体重

---

## 機能詳細

### 1. ユーザー認証と目標設定

- Laravel の認証システムを利用し、ユーザー登録、ログイン、ログアウト機能を実装。
- 目標体重、体脂肪率、トレーニング重量の目標を設定できるインターフェースを提供。

### 2. トレーニングと体重の記録

- 毎日のトレーニング内容と体重を記録。
- トレーニング種目や回数、重量などの詳細も記録。

### 3. 進捗状況の可視化

- **進捗バー**: 目標値に対する達成率を進捗バーで表示。
- **トレーニング量カレンダー**: Github のコントリビューションのように、日々のトレーニング量に応じてカレンダーを色分け表示。

### 4. 通知機能

- **週次・月次の進捗通知**: ユーザーの目標達成状況を毎週・毎月通知。
- **リマインダー**: 記録漏れを防ぐため、日々のトレーニングリマインダーを送信。

---

## 今後の展開

1. **React Native によるモバイル版の展開**

   - Web 版の完成後、API を活用して React Native でモバイルアプリを構築。
   - モバイルでのトレーニングリマインダーやプッシュ通知機能を強化。

2. **収益化の検討**
   - 将来的にプレミアムプランを提供し、進捗データの詳細な分析や広告非表示などのオプションを追加。

---
