function addConversationHistory(connection, intent, text) {
  return new Promise((resolve, reject) => {
    const datetime = new Date();
    //เพิ่มข้อมูลเข้าฐานข้อมูล
    connection.query(
      'INSERT INTO conversation_history (intent, text, datetime) VALUES (?, ?, ?)',
      [intent, text, datetime],
      (error, results, fields) => {
        let err = false;
        let message = null;
        if (error) {
          err = true;
          message = 'ไม่สามารถบันทึกข้อมูล';
          console.error('เกิดข้อผิดพลาดในการเพิ่มข้อมูล: ', error);
          reject(new Error('ไม่สามารถบันทึกข้อมูล')); // เมื่อเกิดข้อผิดพลาด
        } else {
          message = 'บันทึกข้อมูลเสร็จสิ้น';
          console.log(
            `${datetime}: Intent: ${intent}, Text: ${text},=> Inserted successfully`
          );
        }

        resolve({
          error: err,
          message: message,
          datetime: datetime,
          results: results, // เพิ่มค่า results
          fields: fields    // เพิ่มค่า fields
        });        
      }
    );
  });
}

module.exports = { addConversationHistory };
