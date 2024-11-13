class MyWebSocketDataFeed {
    constructor() {
        // this.socket = new WebSocket("ws://localhost:8000/ws");
        this.subscribers = {};
        const data = {
            time: Math.floor(Date.now() / 1000),
            low: 26000,
            high: 27000,
            open: 26500,
            close: 26800,
            volume: 100
        };
        // this.socket.onmessage = (event) => {
        //     // Demo response data
        //     const data = {
        //         time: Math.floor(Date.now() / 1000),
        //         low: 26000,
        //         high: 27000,
        //         open: 26500,
        //         close: 26800,
        //         volume: 100
        //     };
        //     // this.updateSubscribers(data);
        // };
        this.updateSubscribers(data);

    }

    onReady(callback) {
        setTimeout(() => callback({ supports_marks: false, supports_timescale_marks: false, supports_time: true }), 0);
    }

    resolveSymbol(symbolName, onSymbolResolvedCallback, onResolveErrorCallback) {
        const symbolInfo = {
            ticker: symbolName,
            name: symbolName,
            session: "24x7",
            timezone: "Etc/UTC",
            minmov: 1,
            pricescale: 100,
            has_intraday: true,
            supported_resolutions: ["1", "5", "15", "30", "60", "D"],
        };
        setTimeout(() => onSymbolResolvedCallback(symbolInfo), 0);
    }

    getBars(symbolInfo, resolution, from, to, onHistoryCallback, onErrorCallback) {
        // fetch(`http://localhost:8000/api/v1/get-bars?symbol=${symbolInfo.ticker}&from=${from}&to=${to}`)
        //     .then(response => response.json())
        //     .then(data => {
        //         const bars = [
        //             {
        //                 time: 1631505600000, // Example timestamp in milliseconds
        //                 low: 44900.0,
        //                 high: 45100.0,
        //                 open: 45000.0,
        //                 close: 45050.0,
        //                 volume: 150
        //             },
        //             {
        //                 time: 1631505660000,
        //                 low: 44910.0,
        //                 high: 45110.0,
        //                 open: 45010.0,
        //                 close: 45060.0,
        //                 volume: 200
        //             },
        //             {
        //                 time: 1631505720000,
        //                 low: 44920.0,
        //                 high: 45120.0,
        //                 open: 45020.0,
        //                 close: 45070.0,
        //                 volume: 250
        //             }
        //         ];
        //         onHistoryCallback(bars, { noData: bars.length === 0 });
        //     })
        //     .catch(onErrorCallback);
        const bars = [
            {
                time: 1631505600000, // Example timestamp in milliseconds
                low: 44900.0,
                high: 45100.0,
                open: 45000.0,
                close: 45050.0,
                volume: 150
            },
            {
                time: 1631505660000,
                low: 44910.0,
                high: 45110.0,
                open: 45010.0,
                close: 45060.0,
                volume: 200
            },
            {
                time: 1631505720000,
                low: 44920.0,
                high: 45120.0,
                open: 45020.0,
                close: 45070.0,
                volume: 250
            }
        ];
        onHistoryCallback(bars, { noData: bars.length === 0 });
    }

    subscribeBars(symbolInfo, resolution, onRealtimeCallback, subscriberUID) {
        this.subscribers[subscriberUID] = onRealtimeCallback;
    }

    unsubscribeBars(subscriberUID) {
        delete this.subscribers[subscriberUID];
    }

    updateSubscribers(data) {
        const bar = {
            time: data.time * 1000,
            low: data.low,
            high: data.high,
            open: data.open,
            close: data.close,
            volume: data.volume,
        };

        for (const subscriber of Object.values(this.subscribers)) {
            subscriber(bar);
        }
    }
}

window.Datafeeds = {};
window.Datafeeds.UDFCompatibleDatafeed = MyWebSocketDataFeed;
