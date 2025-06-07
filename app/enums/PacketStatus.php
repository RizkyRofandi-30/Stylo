<?php

namespace App\Enums;

enum PacketStatus: string
{
    case Menunggu_Konfirmasi = 'Menunggu_Konfirmasi';
    case Sedang_Diproses = 'Sedang_Diproses';
    case Di_Perjalanan = 'Di_Perjalanan';
    case Di_Batalkan = 'Di_Batalkan';
    case Paket_Sampai = 'Paket_Sampai';
}
