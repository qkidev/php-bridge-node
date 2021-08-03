<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CrossChainTx
 *
 * @property int $id
 * @property string $in_tx_hash 转入hash
 * @property string $from_chain 网络id
 * @property string $submit_tx_hash 本地节点提交hash，只提交
 * @property string $out_tx_hash 转出hash，最后确认的一笔
 * @property string $to_chain 网络id
 * @property string $amount 最小跨链数量
 * @property int $status 1处理中 2处理完成
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereFromChain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereInTxHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereOutTxHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereSubmitTxHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereToChain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $to_token token
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereToToken($value)
 * @property string $from_token token
 * @method static \Illuminate\Database\Eloquent\Builder|CrossChainTx whereFromToken($value)
 */
class CrossChainTx extends Model
{
    protected $table = 'cross_chain_tx';
}