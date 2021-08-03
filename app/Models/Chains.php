<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Chains
 *
 * @property int $id
 * @property string $name 主网名字
 * @property string $network_id 网络id
 * @property string $gas_price 矿工费价格，单位gwei
 * @property int $status 1启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Chains newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chains newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chains query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereGasPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereNetworkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chains whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Chains extends Model
{
    protected $table = 'chains';
}