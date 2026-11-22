<?php

namespace Database\Seeders;

use App\Models\DonHang;
use App\Models\sanpham2001230023;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $danhsach = [
            [
                'ma' => 'SP01',
                'ten' => 'Laptop Dell Inspiron',
                'gia' => 15000000,
                'hinh' => 'sp1.jpg',
            ],
            [
                'ma' => 'SP02',
                'ten' => 'Chuột không dây Logitech',
                'gia' => 350000,
                'hinh' => 'sp2.jpg',
            ],
            [
                'ma' => 'SP03',
                'ten' => 'Bàn phím cơ Keychron',
                'gia' => 1850000,
                'hinh' => 'sp3.jpg',
            ],
        ];

        foreach ($danhsach as $sp) {
            sanpham2001230023::updateOrCreate(['ma' => $sp['ma']], $sp);
        }

        $u1 = User::updateOrCreate(
            ['email' => 'nguyenvana@example.com'],
            ['name' => 'Nguyễn Văn A', 'password' => '123456']
        );

        $u2 = User::updateOrCreate(
            ['email' => 'tranthib@example.com'],
            ['name' => 'Trần Thị B', 'password' => '123456']
        );

        $donhang = [
            [
                'ma_don' => 'DH01',
                'user_id' => $u1->id,
                'tong_tien' => 15350000,
                'trang_thai' => 'Hoàn thành',
            ],
            [
                'ma_don' => 'DH02',
                'user_id' => $u2->id,
                'tong_tien' => 1850000,
                'trang_thai' => 'Chờ xử lý',
            ],
            [
                'ma_don' => 'DH03',
                'user_id' => $u1->id,
                'tong_tien' => 350000,
                'trang_thai' => 'Đang giao',
            ],
        ];

        foreach ($donhang as $dh) {
            DonHang::updateOrCreate(['ma_don' => $dh['ma_don']], $dh);
        }
    }
}
