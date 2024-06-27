class Solution(object):
    def maxOperations(self, nums, k):
        """
        :type nums: List[int]
        :type k: int
        :rtype: int
        """
        total = 0
        buffer = {}
        for x in nums:
            if x in buffer and buffer[x] > 0:
                buffer[x] -= 1
                total += 1
            else:
                if k - x not in buffer:
                    buffer[k - x] = 0

                buffer[k - x] += 1

        return total
