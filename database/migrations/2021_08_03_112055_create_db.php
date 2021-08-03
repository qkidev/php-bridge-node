<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chains', function (Blueprint $table) {
            $table->id();
            $table->staing("name")->comment("主网名字");
            $table->decimal("network_id",20,0,true)->comment("网络id");
            $table->decimal("gas_price",8,2,true)->comment("矿工费价格，单位gwei");
            $table->tinyInteger("status",false,true)->default(0)->comment("1启用");
            $table->timestamps();
        });


        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->staing("name")->comment("主网名字");
            $table->decimal("from_chain",20,0,true)->comment("网络id");
            $table->decimal("to_chain",20,0,true)->comment("网络id");
            $table->string("from_token",42)->comment("如果为空就是主网币");
            $table->string("to_token",42)->comment("如果为空就是主网币");
            $table->decimal("min_amount",65,0,true)->comment("最小跨链数量");
            $table->decimal("max_amount",65,0,true)->comment("最大跨链数量");
            $table->tinyInteger("status",false,true)->default(0)->comment("1启用");
            $table->timestamps();
        });

        Schema::create('cross_chain_tx', function (Blueprint $table) {
            $table->id();
            $table->staing("in_tx_hash",66)->comment("转入hash");
            $table->decimal("from_chain",20,0,true)->comment("网络id");
            $table->Integer("token_id",false,true)->comment("token id");
            $table->staing("submit_tx_hash",66)->comment("本地节点提交hash，只提交");
            $table->staing("out_tx_hash",66)->comment("转出hash，最后确认的一笔");
            $table->decimal("to_chain",20,0,true)->comment("网络id");
            $table->decimal("amount",65,0,true)->comment("最小跨链数量");
            $table->tinyInteger("status",false,true)->default(0)->comment("1处理中 2处理完成");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db');
    }
}
