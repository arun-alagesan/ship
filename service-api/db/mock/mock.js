var randomNumber = () => {
    var min = 0, max = 100
    return Math.floor(Math.random() * (max - min + 1) ) + min;
  }
var reports = [
    { //mock data set 1
        number : randomNumber(),
        type : {id: 1, description : 'Sea Report'},
        createdDate : Date.now(),
        createdBy : "abcd",
        status : {id : 1, description : 'Open'},
        voyageNumber :randomNumber(),
        vessel : {
            imoNumber : '98786858',
            name : 'MAERSK HAI PHONG',
            master : {id :randomNumber(), name : 'SRINI'},
            chiefOfficer : {id :randomNumber(), name : 'RAM'},
            chiefEngineer : {id :randomNumber(), name : 'GANESH'},
            secondEngineer : {id :randomNumber(), name : 'KRISH'},
        },
        operations : {
            operatingTimeStamp :{
                operationType : {id : Math.random(4), description : 'Normal Cruising'},
                startOfReportDate : Date.now(),
                closeOfReportDate : Date.now(),
                startTimeZone : '+5:30',
                closeTineZone : '+8:30',
                startDate : Date.now(),
                closeDate : Date.now(),
                periodSinceLastReport : '4'

            },
            operatingCondition : {
                cargoWeight : {value : 200 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                ballastWater : {value : 0 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                loadConstraint : true,
                aftDraft : {value : 10 , description :'', short :'m'},
                fwdDraft : {value : 20 , description :'', short :'m'},
                trim : {value : 30 , description :'', short :'m'},
                metaCentricHeight : {value : 20 , unit : {id : Math.random(4),description : '', short : 'm'}},
                dwtReserve : {value : 0 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                maxRollAngle : {value : 30 , unit : {id : Math.random(4),description : 'Degree', short : 'o'}},
            },
            voyegerPlan :{
                sailingPlan : {id : Math.random(4), description : 'Plan Available'},
                destinationPort : '',
                destinationPortCode : '',
                destinationPortTimeZone : '',
                etaPilotStationDate : Date.now(),
                etaPortDate : Date.now(),
                remainingDistanceToEOSP : {value : 250, unit : {id : Math.random(4),description : 'Nautile Miles', short : 'nM'}} ,
                remainingTimeToEOSP : {value : 48, unit : {id : Math.random(4),description : 'Hours', short : 'Hrs'}}
            },
            position :{
                coordinates : {
                    longitude : {value0 : 23, value1 : 34, value2 : 34, direction :{id: Math.random(4), description : 'North', short : 'N'}},
                    lattitude : {value0 : 23, value1 : 34, value2 : 34, direction :{id: Math.random(4), description : 'East', short : 'E'}}
                }
            },
            comments : [{id:randomNumber(), text : 'Test Comment for Operations', createdDate : Date.now(),createdBy : "abcd", active : true}]
        },
        comments : [{id :randomNumber(), text : "test comments", createdDate : Date.now(),createdBy : "abcd", active : true}]
    },

    { //mock data set 2
        number :randomNumber(),
        type : {id: 1, description : 'Sea Report'},
        createdDate : Date.now(),
        createdBy : "efgh",
        status : {id : 1, description : 'Open'},
        voyageNumber :randomNumber(),
        vessel : {
            imoNumber : '98786858',
            name : 'MAERSK HAI PHONG',
            master : {id :randomNumber(), name : 'SRINI'},
            chiefOfficer : {id :randomNumber(), name : 'RAM'},
            chiefEngineer : {id :randomNumber(), name : 'GANESH'},
            secondEngineer : {id :randomNumber(), name : 'KRISH'},
        },
        operations : {
            operatingTimeStamp :{
                operationType : {id : Math.random(4), description : 'Normal Cruising'},
                startOfReportDate : Date.now(),
                closeOfReportDate : Date.now(),
                startTimeZone : '+5:30',
                closeTineZone : '+8:30',
                startDate : Date.now(),
                closeDate : Date.now(),
                periodSinceLastReport : '4'

            },
            operatingCondition : {
                cargoWeight : {value : 200 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                ballastWater : {value : 0 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                loadConstraint : true,
                aftDraft : {value : 10 , description :'', short :'m'},
                fwdDraft : {value : 20 , description :'', short :'m'},
                trim : {value : 30 , description :'', short :'m'},
                metaCentricHeight : {value : 20 , unit : {id : Math.random(4),description : '', short : 'm'}},
                dwtReserve : {value : 0 , unit : {id : Math.random(4),description : 'Metric Ton', short : 'MT'}},
                maxRollAngle : {value : 30 , unit : {id : Math.random(4),description : 'Degree', short : 'o'}},
            },
            voyegerPlan :{
                sailingPlan : {id : Math.random(4), description : 'Plan Available'},
                destinationPort : '',
                destinationPortCode : '',
                destinationPortTimeZone : '',
                etaPilotStationDate : Date.now(),
                etaPortDate : Date.now(),
                remainingDistanceToEOSP : {value : 250, unit : {id : Math.random(4),description : 'Nautile Miles', short : 'nM'}} ,
                remainingTimeToEOSP : {value : 48, unit : {id : Math.random(4),description : 'Hours', short : 'Hrs'}}
            },
            position :{
                coordinates : {
                    longitude : {value0 : 23, value1 : 34, value2 : 34, direction :{id: Math.random(4), description : 'North', short : 'N'}},
                    lattitude : {value0 : 23, value1 : 34, value2 : 34, direction :{id: Math.random(4), description : 'East', short : 'E'}}
                }
            },
            comments : [{id:randomNumber(), text : 'Test Comment for Operations', createdDate : Date.now(),createdBy : "abcd", active : true}]
        },
        comments : [{id:randomNumber(), text:'test comments', createdDate : Date.now(),createdBy : 'abcd', active : true}]
    }
        
]

module.exports = reports