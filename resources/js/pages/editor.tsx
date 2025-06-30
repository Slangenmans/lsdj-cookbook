import { Head, Link } from '@inertiajs/react';

export default function editor({ instrument }){
    console.log(instrument);

    return (
        <>
            <Head title={'Editor'}></Head>
            <div className={"flex flex-row gap-4 items-center justify-between min-h-screen min-w-screen"}>
                <div className={"flex flex-row"}>
                    {/* Instrument */}
                    <div className={"flex flex-col border-2 border-amber-200 p-5"}>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>NAME:</p>
                            <input type={"text"} defaultValue={instrument.name} className={'text-right'}></input>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>ENV:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                <input type={"text"} defaultValue={instrument.env1} className={'w-6 text-right'}></input>
                                <p>/</p>
                                <input type={"text"} defaultValue={instrument.env2} className={'w-6 text-right'}></input>
                                <p>/</p>
                                <input type={"text"} defaultValue={instrument.env3} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>WAVE:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                <p>%</p>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.wave} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>OUTPUT:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.output} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>LENGTH:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                <input type={"text"} defaultValue={instrument.length} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>SWEEP:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                <input type={"text"} defaultValue={instrument.sweep} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>PITCH:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                <input type={"text"} defaultValue={instrument.pitch_speed} className={'w-14 text-right'}></input>
                                <input type={"text"} defaultValue={instrument.pitch_waveform} className={'w-14 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>TRANSPOSE:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.transpose} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>PU2 TSP.:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.transpose_pu2} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>FINETUNE:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.finetune} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                        <div className={"flex flex-row justify-between gap-4"}>
                            <p>CMD / RATE:</p>
                            <div className={"flex flex-row justify-between gap-1"}>
                                {/*TODO: dropdown?*/}
                                <input type={"text"} defaultValue={instrument.cmd_rate} className={'w-6 text-right'}></input>
                            </div>
                        </div>
                    </div>
                    {/* Table */}
                    <div className={"flex flex-col border-2 border-red-600 p-5"}>
                        <h1>Table screen here</h1>
                    </div>
                </div>
            </div>
            <div>
                Description:
                Bla bla - bla bla bla bla.
            </div>
        </>
    )
}
