<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tokens
 *
 * @property int $id
 * @property string $name 主网名字
 * @property string $from_chain 网络id
 * @property string $to_chain 网络id
 * @property string $from_token 如果为空就是主网币
 * @property string $to_token 如果为空就是主网币
 * @property string $min_amount 最小跨链数量
 * @property string $max_amount 最大跨链数量
 * @property int $status 1启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereFromChain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereFromToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereMaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereMinAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereToChain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereToToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tokens whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tokens extends Model
{

    protected $table = 'tokens';
}