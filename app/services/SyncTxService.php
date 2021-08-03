<?php

namespace App\Services;

use EthereumRPC\Contracts\ABI;


class SyncTxService
{
    protected $chain;

    protected $nodes;

    protected $abiJson;

    protected $events;

    protected $eventTypes = [
        '0x7189490b11cdaec9f21762aedf4a502b07ca019f0f6da42c6da64a60e4377f91'=>'Deposit',
        '0x1343453926c400b225f44cca53c3e771b9eb74201d8b2b5c8e2c63424ef2373e'=>'WithdrawDone',
    ];

    public function __construct($chain = 'qki')
    {
        $this->chain = $chain;
        if($chain == 'qki'){
            $url = env("QKI_RPC_HOST");
        } else {
            $url = env("RPC_HOST");
        }
    }

    public function Sync(){
        $this->abiJson = json_decode(file_get_contents("./public/Bridge.abi"),true);
        $url = "https://www.quarkscout.com/api?module=logs&action=getLogs&fromBlock=7433489&toBlock=latest&address=0x4D00E1Cdd4FAd2f8E82331F84F164dF361df5cAC&topic0=0x7189490b11cdaec9f21762aedf4a502b07ca019f0f6da42c6da64a60e4377f91";
        $data = file_get_contents($url);
        $logs = json_decode($data, true);
        foreach ($logs['result'] as $log){

            $event = $this->decodeLog($this->eventTypes[$log['topics'][0]],$log['data']);
            //todo 入库;
        }
    }


    //获取事件的参数
    public function getEventInput($name){
        if(isset($this->events[$name])){
            return $this->events[$name];
        }

        $inputs = [];
        foreach($this->abiJson as   $item){
            if($item['type'] == 'event' && $item['name'] ==  $name){
                $inputs = $item['inputs'];
            }
        }
        $this->events[$name] = $inputs;
        return $this->events[$name];
    }


    //解码日志
    public function decodeLog($name,string $log)
    {
        if (substr($log,0,2) === "0x"){
            $log = substr($log,2);
        }
        $data = str_split($log,64);
        $inputs = $this->getEventInput($name);
        $parames = [];
        foreach($inputs as $id=>$input){
            $parames[$input['name']] = ABI\DataTypes::Decode($input['type'],$data[$id]);
        }
        return $parames;
    }
}